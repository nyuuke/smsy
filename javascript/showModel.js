document.querySelectorAll('#delete').forEach((el, key) =>
  el.addEventListener('click', () => {
    document.querySelectorAll('.modal-delete')[key].style.display = 'flex'
  })
)

document.querySelectorAll('.modal-cancel-delete').forEach((el, key) =>
  el.addEventListener('click', () => {
    document.querySelectorAll('.modal-delete')[key].style.display = 'none'
  })
)