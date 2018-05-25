<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## What i learn today

Source Video

[Beginner Laravel 5.5 ](https://www.youtube.com/playlist?list=PL1aMeb5UP_PGje8-vt99VyVuVikcaSpTG).

Conclusion
- part 9, its about blade basic = when you typing array data in PostController@index, you can show up in index.blade.php with command 
```
return view('index', compact('posts'));
```
```
   <a href="{{ route('post.show', $post['id']) }}"><li>{{ $post['title'] }}</li></a>
```

untuk penempatan link, dapat memakai route dengan memanggil name yang ada di route list dan sesuaikan dengan apa yang ingin dimunculkan.

- part 10, layouting with blade. Jadi dengan menggunakan 
```
@yield('title')

```
pada app.blade.php, itu nanti si judul akan berubah secara dinamis tergantung dengan title yang ada pada setiap menu. seperti contohnya pada create.blade.php, disana terdapat beberapa bagian

```
@extends('layout.php')
@section('title')
@section('body')

```

dari sana, extends layout itu maksduhnya lokasi file app.blade.php berada pada folder layout. jadi file create ini turunan dari file app. Kemudian terdapat section title - nah dia ini yang nantinya akan ditampilkan untuk judulnya, sedangkan body itu baris code yang digunakan untuk bagian body 

Dengan menggunakan layouting, kalian bisa lebih mudah untuk melihat struktur dan dia dapat berubah secara dinamis


