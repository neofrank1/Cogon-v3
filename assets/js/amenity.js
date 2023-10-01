$('#amenityinfo').on('show.bs.modal',event  => {
    const button = event.relatedTarget;  
    const data = JSON.parse(button.getAttribute('data-data'));
      const amenityNameInfo = $('#amenityinfo #name')
      const amenityPriceInfo = $('#amenityinfo #price') 
      const amenityQuantityInfo = $('#amenityinfo #quantity')
      const amenityDescriptionInfo = $('#amenityinfo #description')
  
      amenityNameInfo.text(data.name);
      amenityPriceInfo.text(data.price);
      amenityQuantityInfo.text(data.quantity);
      amenityDescriptionInfo.text(data.description);
   });

   $('#updateamenitymodal').on('show.bs.modal',event  => {
    const button = event.relatedTarget;  
    const data = JSON.parse(button.getAttribute('data-data'));
      const amenityNameUpdate = $('#updateamenitymodal #name')
      const amenityPriceUpdate = $('#updateamenityymodal #price') 
      const amenityQuantityUpdate = $('#updateamenitymodal #quantity')
      const amenityDescriptionUpdate = $('#updateamenitymodal #description')
      const amenityIdUpdate = $('#updateamenitymodal #id')

  
      amenityNameUpdate.text(data.name);
      amenityPriceUpdate.text(data.price);
      amenityQuantityUpdate.text(data.quantity);
      amenityDescriptionUpdate.text(data.description);
      amenityIdUpdate.val(data.id);
   });
  