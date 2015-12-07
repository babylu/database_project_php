/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    $('#searchIcon').click(function(){
        var searchInfo = $('#searchInput').val();
        var searchInfoList = searchInfo.splite(' ');
        window.location.href='http://localhost:8888/database_project_php/html/searchResult.php'+'?'+searchInfo;
    });
});

