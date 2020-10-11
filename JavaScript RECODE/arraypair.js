let numero = ["0", "1", "2", "3", "4"]
let controle = 0

for(let i = 0; i < 5; i++){
    if((i-controle)%2 != 0){
        numero.splice(i, 1)
        controle++
    }
}

console.log(numero)
