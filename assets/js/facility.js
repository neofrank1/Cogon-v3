$('#facilityinfo').on('show.bs.modal',event  => {
    const button = event.relatedTarget;  
    const data = JSON.parse(button.getAttribute('data-data'));
      const facilityNameInfo = $('#facilityinfo #name')
      const facilityPriceInfo = $('#facilityinfo #price') 
      const facilityQuantityInfo = $('#facilityinfo #quantity')
      const facilityDescriptionInfo = $('#facilityinfo #description')
  
      facilityNameInfo.text(data.name);
      facilityPriceInfo.text(data.price);
      facilityQuantityInfo.text(data.quantity);
      facilityDescriptionInfo.text(data.description);
   });

   $('#updatefacilitymodal').on('show.bs.modal',event  => {
    const button = event.relatedTarget;  
    const data = JSON.parse(button.getAttribute('data-data')); console.log(data)
      const facilityNameUpdate = $('#updatefacilitymodal #name');
      const facilityPriceUpdate = $('#updatefacilitymodal #price');
      const facilityQuantityUpdate = $('#updatefacilitymodal #quantity');
      const facilityDescriptionUpdate = $('#updatefacilitymodal #description');
      const facilityIdUpdate = $('#updatefacilitymodal #id');

  
      facilityNameUpdate.val(data.name);
      facilityPriceUpdate.val(data.price);
      facilityQuantityUpdate.val(data.quantity);
      facilityDescriptionUpdate.val(data.description);
      facilityIdUpdate.val(data.id);
   });
console.log($("#added_facility_success"))

   if($("#added_facility_success").length > 0)
{
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
      })
      
      Toast.fire({
        icon: 'success',
        title: 'Successfully Added New Facility'
      })
}
else if ($("#added_facility_failed").length > 0)
{
    alert(2);
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
      })
      
      Toast.fire({
        icon: 'success',
        title: 'Successfully Added New Facility'
      })
}
