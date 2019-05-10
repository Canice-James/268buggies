<?php 

  Route::set('index.php', function(){
    Index::CreateView('index');
  });

  Route::set('dashboard', function(){
    Dashboard::CreateView('dashboard');
  });

  Route::set('buggy', function(){
    Dashboard::CreateView('buggy');
  });
?>