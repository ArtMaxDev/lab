export default (form) => {
  const formEntries = new FormData(form).entries();
  return Object.assign(
    ...Array.from(
      formEntries, ([x, y]) => ({
        [x]: y
      })
    )
  );
};
