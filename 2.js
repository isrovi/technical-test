function multi(input){
    var transpose=[];
    for(var i=0; i<input.length; i++){
    	for(var j=0;j<input[i].length; j++){
      if(input[i][j]==undefined)continue;
      if(transpose[j]==undefined) transpose[j] = [];
      transpose[j][i]=input[i][j];
      }
    }
    return transpose;
}
console.log(multi([
    [3,2,3],
    [2,2,3],
    [1,2,3]
]));
