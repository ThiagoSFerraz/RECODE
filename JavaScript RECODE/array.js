let emotes = ["FeelsWeirdMan", "Pog", "PogU", "WidePeepoHappy"] //Array resumindo são várias variáveis dentro de uma categoria
console.log(emotes)
emotes.push("FeelsBadMan") //o PUSH adiciona um item no array (sempre irá para o último da fila)
emotes.push("ModCheck")
console.log(emotes)
emotes.pop() //o POP tira o último elemento!(o último da fila no caso!)
console.log(emotes)
emotes.push("ModCheck")
emotes.push("PauseChamp", "FeelsAmazingMan")
console.log(emotes)
emotes.splice(1,1) //veja que no slice, o primeiro você seleciona qual indice e depois da virgula quantos itens tem de ser removidos
console.log(emotes)
/*
    COMO FOI VISTO DEPOIS DO SPLICE O "Pog" FOI REMOVIDO!
*/
emotes.push("MonkaW")
emotes.shift()
console.log(emotes.length)
console.log(emotes)
console.log(emotes.sort())