function kvPairs(commands) {
    let key = commands[commands.length - 1];
    let result = 0;
    for (let i = commands.length - 2; i >= 0; i--){
        let temp = commands[i].split(' ');
        if(temp[0] === 'key'){
            console.log(temp[1]);
            result++;
            break;
        }
    }
    if(result === 0)
        console.log("None");
}