function loutcust(){
swal({
title: 'Are you sure?',
text: 'Do you really want to Logout?',
type: 'warning',
showCancelButton: true,
confirmButtonText: 'Yes',
cancelButtonText: 'No'
}).then((result) => {
if (result.value) {
window.location="https://localhost/kalakal/Login_controller/logoutcustomer";
// For more information about handling dismissals please visit
// https://sweetalert2.github.io/#handling-dismissals
} else if (result.dismiss === swal.DismissReason.cancel) {
swal(
  'Cancelled',
  'Okay enjoy!',
  'error'
)
}
})
}
function loutvend(){
swal({
title: 'Are you sure?',
text: 'Do you really want to Logout?',
type: 'warning',
showCancelButton: true,
confirmButtonText: 'Yes',
cancelButtonText: 'No'
}).then((result) => {
if (result.value) {
window.location="https://localhost/kalakal/Login_controller/logoutvendor";
// For more information about handling dismissals please visit
// https://sweetalert2.github.io/#handling-dismissals
} else if (result.dismiss === swal.DismissReason.cancel) {
swal(
  'Cancelled',
  'Okay enjoy!',
  'error'
)
}
})
}
function loutmanu(){
swal({
title: 'Are you sure?',
text: 'Do you really want to Logout?',
type: 'warning',
showCancelButton: true,
confirmButtonText: 'Yes',
cancelButtonText: 'No'
}).then((result) => {
if (result.value) {
window.location="https://localhost/kalakal/Login_controller/logoutmanufacturer";
// For more information about handling dismissals please visit
// https://sweetalert2.github.io/#handling-dismissals
} else if (result.dismiss === swal.DismissReason.cancel) {
swal(
  'Cancelled',
  'Okay enjoy!',
  'error'
)
}
})
}
