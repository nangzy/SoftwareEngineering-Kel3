function shipping() {
    const shipping_method = document.getElementById('shipping_method')
    if (shipping_method.value === 'JNE') {
        document.getElementById("shipping_cost").innerHTML = '10000'
    }
}
