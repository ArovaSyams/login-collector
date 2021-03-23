// password social
$('#passwordModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('password') // Extract info from data-* attributes
    var id = button.data('id') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-body input').val(recipient)
    modal.find('.modal-body .id').val(id)
  })

// edit social all
$('#socialModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal

  var id = button.data('id') // Extract info from data-* attributes
  var accountType = button.data('account-type') // Extract info from data-* attributes
  var account = button.data('account')
  var username = button.data('username')
  var email = button.data('email')
  var password = button.data('password') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body .id').val(id)
  modal.find('.modal-body .account-type').val(accountType)
  modal.find('.modal-body .form-group .account').val(account)
  modal.find('.modal-body .form-group .username').val(username)
  modal.find('.modal-body .form-group .email').val(email)
  modal.find('.modal-body .form-group .password').val(password)
})