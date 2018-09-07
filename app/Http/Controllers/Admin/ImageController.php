<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ImageUploadRequest;
use Illuminate\Http\JsonResponse;
use Image;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    protected const IMAGE_SIZES
        = [
            'big' => [
                'w' => 1920,
                'h' => 1080,
            ],
            'small' => [
                'w' => 200,
                'h' => 200,
            ]
        ];

    public function __invoke(ImageUploadRequest $request): JsonResponse
    {
        if ($request->hasFile('image')) {
            $image_path = $request->image->path();
            $path = $this->saveImage($image_path);

            if ($path) {
                return response()->json([
                    'link' => $path,
                ]);
            }
            return response()->json([], 400);
        }
        return response()->json([], 400);
    }

    protected function saveImage($image_path)
    {
        $image_name = str_random(32);
        $image_path_save = '/images';
        $storage_path = storage_path('app/public' . $image_path_save);
        if (mb_substr($storage_path, -1) !== '/') {
            $storage_path .= '/';
        }
        $big_image_name = $image_name . '.jpg';
        $small_image_name = $image_name . '_small.jpg';

        $image = Image::make($image_path);

        if ($image->width() > self::IMAGE_SIZES['big']['w']) {
            $image->resize(
                self::IMAGE_SIZES['big']['w'],
                null,
                function ($constraint) {
                    $constraint->aspectRatio();
                }
            );
        }

        if ($image->height() > self::IMAGE_SIZES['big']['h']) {
            $image->resize(
                null,
                self::IMAGE_SIZES['big']['h'],
                function ($constraint) {
                    $constraint->aspectRatio();
                }
            );
        }

        $image->save($storage_path . $big_image_name);

        $image->resize(
            self::IMAGE_SIZES['small']['w'],
            null,
            function ($constraint) {
                $constraint->aspectRatio();
            }
        )->crop(
            self::IMAGE_SIZES['small']['w'],
            self::IMAGE_SIZES['small']['h']
        )->save($storage_path . $small_image_name);

        return url($image_path_save . '/' . $image_name);
    }
}
