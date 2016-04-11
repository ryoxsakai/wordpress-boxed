// Twitterでのツイート数を取得
function get_social_count_twitter(url, counterId) {
    $.ajax({
        url:'http://jsoon.digitiminimi.com/twitter/count.json',
        dataType:'jsonp',
        timeout: 10000, //10sec
        data:{
            url:url
        },
        success:function(res){
            $('#' + counterId + ' .count').text( res.count || 0 );
        },
        error:function(){
            $('#' + counterId + ' .count').text('?');
        }
    });
}
// Facebookでのいいね！数を取得
function get_social_count_facebook(url, counterId) {
    $.ajax({
        url:'https://graph.facebook.com/',
        dataType:'jsonp',
        data:{
            id:url
        },
        success:function(res){
            $('#' + counterId + ' .count').text( res.shares || 0 );
        },
        error:function(){
            $('#' + counterId + ' .count').text('?');
        }
    });
}
// はてなブックマークでブックマーク数を取得
function get_social_count_hatebu(url, counterId) {
    $.ajax({
        url:'http://api.b.st-hatena.com/entry.count?callback=?',
        dataType:'jsonp',
        data:{
            url:url
        },
        success:function(res){
            $('#' + counterId + ' .count').text( res || 0 );
        },
        error:function(){
            $('#' + counterId + ' .count').text('?');
        }
    });
}