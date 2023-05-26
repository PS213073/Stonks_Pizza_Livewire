function updatePrice(id, value, price) {
    let newprice = 0.0;
    if (value == 'medium') {
        newprice = price
    } else if (value == 'large') {
        newprice = price * 1.2

    } else 
    {
        newprice = price * 0.8

    }

    document.getElementById(id).innerHTML = newprice.toFixed(2)
    document.getElementById("F"+id).value = newprice.toFixed(2)


}


