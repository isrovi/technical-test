function hitungVoucher(voucher,nominal){
  var diskon;
  var hasil;
  var kembalian;
  if(nominal>=50000 && voucher=="DumbWaysJos"){
    diskon=20000;
    hasil=nominal-diskon;
    kembalian=nominal-hasil;
    console.log("Uang yang harus dibayar:"+hasil);
    console.log("Diskon:"+diskon);
    console.log("Kembalian:"+kembalian);
    
  }else if(nominal>=80000 && voucher=="DumbWaysMantap"){
  	diskon=40000;
    hasil=nominal-diskon;
    kembalian=nominal-hasil;
    console.log("Uang yang harus dibayar:"+hasil);
    console.log("Diskon:"+diskon);
    console.log("Kembalian:"+kembalian);
  }else{
  	console.log("Voucher salah atau nominal kurang");
  }
}
hitungVoucher("DumbWaysJos",100000);
