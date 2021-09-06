var huruf=['D','U','M','B','W','A','Y','S','I','D'];
var b=7;
var k=5;

function cetak() {
  for(var i=1; i<=b; i++) {
    var s="";
    for(var j=1; j<=k; j++) {
      if(i==3 || i==5){
        s += "* = ";
      }else if(i==4){
        s = huruf.join(' ');
      }else{
      	s += "= * ";
      }
    }
    console.log(s);
  }
}

cetak();