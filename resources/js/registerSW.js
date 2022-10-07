var sw =  null;
if('serviceWorker' in navigator){
    window.addEventListener('load', () => {
        //Register SW
        navigator.serviceWorker.register('./sw_1.js', {scope: '/'})
            .then(reg => {
                //Remember SW state
                sw = reg.installing || reg.waiting || reg.active;
            })
            .catch(err => console.log(`Service Worker: Error: ${err}`))
    })
}
else{
    //Service Worker are not supported
}
//Development mode: Unregister old SW, if SW was changed
navigator.serviceWorker.getRegistrations()
    .then((regs) => {
        for (let reg of regs){
            reg.unregister();
        }
    })
