
function calculateAmount(val)
{ 
    if( val == "offer-btn-1")
    {
        var price = val * (4 / 100);
    
        var tot_price = price - val;
        
        var divobj = document.getElementById('tot_amount');
        
        divobj.value = tot_price;
    }
    
}
