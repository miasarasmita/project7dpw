<?php  
namespace App\Http\Controllers;


class HomeController extends controller{


   function showberanda(){
       return view('admin.beranda');
   }

   function showproduk(){
    return view('admin.produk.index');
   }

   function showtemplate(){
    return view('admin.template.base');
   }

   function showkategori(){
    return view('admin.kategori.index');
   }

   function showuser(){
    return view('admin.user.index');
   }
function test($produk, $hargaMin = 0, $hargaMax = 0){
    if($produk == 'jam_pria'){
      echo "Tampilkan Produk Jam_pria";
    }elseif($produk == 'jam_wanita'){
      echo "Produk Jam_wanita";
    }
  echo "<br>";
  echo "Harga Min adalah $hargaMin <br>";
  echo "Harga Max adalah $hargaMax <br>";
  }

}