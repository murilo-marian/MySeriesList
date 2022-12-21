const exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', event => {
  // Button that triggered the modal
  const button = event.relatedTarget
  // Extract info from data-bs-* attributes
  const id = button.getAttribute('data-bs-id')
  const nome = button.getAttribute('data-bs-nome')
  const temp = button.getAttribute('data-bs-t')
  const ep = button.getAttribute('data-bs-ep')
  const data = button.getAttribute('data-bs-data')
  const pop = button.getAttribute('data-bs-pop')
  const desc = button.getAttribute('data-bs-desc')
  const imgPath = button.getAttribute('data-bs-imgPath')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalBodyInput = exampleModal.querySelector('.modal-body .id')
  modalBodyInput.value = id
  modalBodyInput = exampleModal.querySelector('.modal-body .nome')
  modalBodyInput.value = nome
  modalBodyInput = exampleModal.querySelector('.modal-body .temporadas')
  modalBodyInput.value = temp
  modalBodyInput = exampleModal.querySelector('.modal-body .episodios')
  modalBodyInput.value = ep
  modalBodyInput = exampleModal.querySelector('.modal-body .pop')
  modalBodyInput.value = pop
  modalBodyInput = exampleModal.querySelector('.modal-body .desc')
  modalBodyInput.value = desc
  modalBodyInput = exampleModal.querySelector('.modal-body .imagePath')
  modalBodyInput.value = imgPath
})