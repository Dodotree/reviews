<?php

if( isset($_GET['offset']) ){
    print file_get_contents(
          "http://test.localfeedbackloop.com/api?apiKey=61067f81f8cf7e4a1f673cd230216112&'"
          .$_SERVER["QUERY_STRING"]
    );
    exit;
}

?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.1/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700,700italic' rel='stylesheet' type='text/css'>
<script src="jquery-2.1.3.js"></script>
<script src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>

<style>
body{
    background-color: #c6ded8;
    font-family: "Open Sans","lucida grande","Segoe UI",arial,verdana,"lucida sans unicode",tahoma,sans-serif;
}

.business-card{
    margin: 3em auto 0;
    background: #ffffff;
    width: 800px;
    height: 248px;
    max-height: 248px;
    min-height: 248px;
}
.main-block{
    display: inline-block;
    width: 400px;
    float: left;
}
.name-block{
    width: 400px;
    height: 175px;
    min-height: 175px;
    max-height: 175px;
    padding: 40px;
    background: #ffffff url("imgs/background.jpg");
}
.info-block{
    display: inline-block;
    width: 400px;
    height: 248px;
    min-height: 248px;
    max-height: 248px;
    padding: 40px;
    background: #2bbbad;
    color: #fff;
}
.info-block.dl-horizontal dt {
    width: 3rem;
    font-size: 2.2rem;
    margin-top: 1rem;
}
.info-block.dl-horizontal dd {
    margin-left: 5rem;
    margin-top: 1.5rem;
    font-size: 1.3rem;
}
.info-block a, .info-block a:hover {
    color: #fff;
}
.business-name{
    text-transform: uppercase; 
    color: #ffffff;
    font-size: 3rem;
    text-align: center;
}
.stars-block{
    width: 400px;
    height: 73px;
    padding: 2rem 1.5rem;
    color: #f78297;
}
.fa-star, .fa-star-o, .fa-star-half-o{
    font-size: 3rem;
}

.reviews{
    margin: auto;
    padding: 0;
    width: 800px;
    background: #fff;
}

#review-template{
    display: none;
}

.review-block{
    padding: 1rem 2rem;
}
.review-block:hover {
    background-color: #fae6db;
}
.review-block:hover .review-footer{
    color: #333333;
}
.review-block:hover .review-footer .fa-yelp{
    color: #e53935;
}
.review-block:hover .review-footer .fa-google{
    color: #4285f4;
}
.review-block .fa-star,
.review-block .fa-star-half-o,
.review-block .fa-star-o{
    font-size: 1.2rem;
    color: #eb7077;
}
a.view-details{
    color:  #00579b;
    color:  #A7AEB3;
    font-weight: 600;
    font-size: 1.3rem;
    display: block;
    float: left;
    margin-top: 0.9rem;
    cursor: pointer;
}
a.view-details:hover {
    color: #00bbd4;
}
.review-date {
    margin-left: 3rem;
    color: #eb7077;
    font-family: Georgia;
}
.review-author {
    margin-left: 3rem;
    font-weight: 700;
    font-style: italic;
    color: #000;
}
.review-author:before, .review-author::before {
    content: "by";
    padding-right: 1rem;
    font-weight: 600;
    font-style: normal;
}
.review-body {
    padding-top: 0.7rem;
    font-size: 1.6rem;
}
.review-footer{
    text-align: right;
    color: #A7AEB3;
}
.review_source{
    font-style: italic;
    padding-right: 0.9rem;
}

.paginator-bar{
    margin: auto;
    padding: 2rem 1.5rem;
    width: 800px;
    background: #fff;
    text-align:center;
}
.paginator{
    font-size: 2.3rem;
    vertical-align:middle;
    display: inline-block;
    width: 300px;
    color:  #A7AEB3;
}
.paginator .fa{
    font-size: 3rem;
    vertical-align:top;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}
.paginator i:hover {
    cursor: pointer;
    color: #000;
}
.paginator-interval{
    display: inline-block;
    width: 100px;
    min-width: 100px;
    max-width: 100px;
}

@media(max-width:768px) {
  .business-card,
  .paginator-bar,
  .reviews{
    width: 400px;
    min-width: 400px;
    max-width: 400px;
  }
  .business-card{
    height: 496px;
    max-height: 496px;
    min-height: 496px;
  }
/// since I dont want to switch to vertical dl
  .dl-horizontal dt {
    float: left;
    width: 3rem;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 5rem;
  }

}

.test-panel{
    position: fixed;
    bottom:0;
    width: 100%;
    height: 45px;
    padding-top: 5px;
    background: rgba(255,255,255,0.6);
    text-align: center;
}

</style>

</head>
<body>

<div class="business-card">
    <div class="main-block">
      <div class="stars-block"> </div>
      <div class="name-block"><div class="business-name"></div></div>
    </div>
    <dl class="info-block dl-horizontal">
      <dt><i class="fa fa-envelope"></i></dt>
      <dd class="mail"></dd>
      <dt><i class="fa fa-phone"></i></dt>
      <dd class="phone"></dd>
      <dt><i class="fa fa-map-marker"></i></dt>
      <dd class="address"></dd>
      <dt><i class="fa fa-home"></i></dt>
      <dd class="website"></dd>
    </dl>
</div>

<div class="paginator-bar">
    <div class="paginator">
        <i class="fa fa-angle-double-left"></i>
        <i class="fa fa-angle-left"></i>
        <span class="paginator-interval">100-150</span>
        <i class="fa fa-angle-right"></i>
        <i class="fa fa-angle-double-right"></i>
    </div>
</div>

<div class="reviews"></div>

<div id="review-template" class ="review-block">
    <div class="review-head">
        <span class="review-stars"></span>
        <span class="review-author"></span> 
        <span class="review-date"></span>
    </div>
    <div class="review-body"></div>
    <div class="review-footer">
        <a class="view-details">View details</a>
        <span class="review_source"></span>
        <i class="fa fa-2x"></i>
    </div>
</div>


<div class="paginator-bar">
    <div class="paginator">
        <i class="fa fa-angle-double-left"></i>
        <i class="fa fa-angle-left"></i>
        <span class="paginator-interval"></span>
        <i class="fa fa-angle-right"></i>
        <i class="fa fa-angle-double-right"></i>
    </div>
</div>



<!-- test panel -->

<div class="test-panel form-inline">
<div class="btn-group" role="group">

    <div class="btn-group dropup internal">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
      Internal(1)
      <span class="caret"></span></button>
      <ul class="dropdown-menu"  role="menu">
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
      </ul>
    </div>

    <div class="btn-group dropup yelp">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
      Yelp(1)
      <span class="caret"></span></button>
      <ul class="dropdown-menu"  role="menu">
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
      </ul>
    </div>

    <div class="btn-group dropup google">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
      Google(1)
      <span class="caret"></span></button>
      <ul class="dropdown-menu"  role="menu">
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
      </ul>
    </div>

    <div class="btn-group dropup threshold">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
      Threshold(1)
      <span class="caret"></span>
      </button>
      <ul class="dropdown-menu"  role="menu">
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
      </ul>
    </div>
    </div>

    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon" id="noOfReviews">noOfReviews</span>
        <input id="noOfReviews-inp" size=3 type="number" min="0" class="form-control" aria-describedby="noOfReviews">
      </div>
    </div>

    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon" id="offset">offset</span>
        <input id="offset-inp" size=3 type="number" min="0" class="form-control" aria-describedby="offset">
      </div>
    </div>

    <button class="btn btn-primary" type="button" onclick="changeVars()">Change</button>

</div>
</div>

<!-- end of test panel -->

<script>


var searchTypes = ['yelp','google', 'map-marker'];

var requestVars = {
    internal: 1,
    yelp:1,
    google:1,
    threshold:1
}

var reviewTemp;

var paginator = {
        total: 172,
        noOfReviews: 10,
        offset: 100,
        set: function(data){
             var offset = Number(this.offset), noOfReviews = Number(this.noOfReviews);
             var total = Number(data.business_info.total_rating.total_no_of_reviews);
             this.total = total;
             if( total == 0 ){
                 $('.paginator').hide();
                 return;
            }
            var rightSide = Math.min( total, offset + noOfReviews);
            var intervalText = ( rightSide == offset )? offset :  offset + '-' + rightSide;
            $('.paginator-interval').html( intervalText );
            if( rightSide  >= total ){
                $('.paginator .fa-angle-right').css({opacity:0});
                $('.paginator .fa-angle-double-right').css({opacity:0});
            }else if( rightSide  + noOfReviews > total ){
                $('.paginator .fa-angle-double-right').css({opacity:0});
                $('.paginator .fa-angle-right').css({opacity:1});
            }else{
                $('.paginator .fa-angle-right').css({opacity:1});
                $('.paginator .fa-angle-double-right').css({opacity:1});
            }
            if( offset < 1 ){
                $('.paginator .fa-angle-double-left').css({opacity:0});
                $('.paginator .fa-angle-left').css({opacity:0});
            }else if( offset - 1 < noOfReviews ){
                $('.paginator .fa-angle-double-left').css({opacity:0});
                $('.paginator .fa-angle-left').css({opacity:1});
            } else{
                $('.paginator .fa-angle-double-left').css({opacity:1});
                $('.paginator .fa-angle-left').css({opacity:1});
            }
            $('.paginator').show();
        },
        get: function(e){
             var offset = Number(this.offset), 
                noOfReviews = Number(this.noOfReviews),
                total = Number(this.total);
            var tgt = $( e.target );
            /// opacity here is an equivalent of being disabled
            if( tgt.css('opacity') == 0 ){ return; }
            if( tgt.hasClass('fa-angle-double-left') ){
                var new_offset = 0;
            }else if( tgt.hasClass('fa-angle-left') ){
                var new_offset =  offset - noOfReviews;
            }else if( tgt.hasClass('fa-angle-double-right') ){
                var new_offset =  total - total%noOfReviews;
            }else if( tgt.hasClass('fa-angle-right') ){
                var new_offset =  offset + noOfReviews;
            }
            this.offset = new_offset;
            requestAPI();
        }
    };
   
    $(window).ready( function(){
	
        $('.paginator .fa').click( $.proxy( paginator.get, paginator ) );

        $('.dropdown-menu li').click(function(){
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
            var btn = $(this).closest('.dropup').find('button');
            btn.html( btn.html().replace( /\(.*/, '('+$(this).text()+')' ) );
        });
        reviewTemp = $('#review-template');

        $('#noOfReviews-inp').val(paginator.noOfReviews);
        $('#offset-inp').val(paginator.offset);

        requestAPI();
    });

    function changeVars(){
        /// could be validated
        paginator.noOfReviews = Number($('#noOfReviews-inp').val());
        paginator.offset = Number($('#offset-inp').val()); 
        requestVars = {
           internal: Number($('.internal li.active').text()),
           yelp:  Number($('.yelp li.active').text()),
           google:  Number($('.google li.active').text()),
           threshold:  Number($('.threshold li.active').text())
        };
        requestAPI();
    }

    function requestAPI(){
        requestVars.offset = paginator.offset;
        requestVars.noOfReviews = paginator.noOfReviews;
        var args = $.param( requestVars );
        $.ajax({
           method: 'GET',
           url: 'reviews_test.php?'+args,
           //dataType: 'json',
           success: fillTemplates,
           error: function( a,b,c ){ console.log( a, b,c ); }
       });
	
    }

    function fillTemplates( data ){
        data = $.parseJSON( data );
        $('.stars-block').html( 
            getStars( Number(data.business_info.total_rating.total_avg_rating) )
            + '(' + data.business_info.total_rating.total_no_of_reviews + ')'
        );

        var myname =data.business_info.business_name;
        myname = myname.replace(/(\w+)\s*$/, ' <b>$1') + '</b>';
        $('.business-name').html( myname );

        $('.info-block .mail').html('<a href="'+data.business_info.external_url+'">Write feedback</a>')
        $('.info-block .phone').html( data.business_info.business_phone );
        $('.info-block .address').html( data.business_info.business_address );
        $('.info-block .website').html('<a href="'+data.business_info.external_page_url+'">Website</a>')

        $('.reviews').empty();
        var arr = data.reviews;
        for( var i=0, review=arr[i]; i < arr.length; i++, review=arr[i] ){
            fillReview( i, review );
        }
        paginator.set(data);
    }

    function fillReview( i, review ){
        var node = reviewTemp.clone( true ).attr("id","review_"+i).appendTo('.reviews');
        node.find( '.review-stars' ).html( getStars(review.rating) );
        node.find( '.review-author' ).html( review.customer_name + ' ' + review.customer_last_name );
        node.find( '.review-date' ).html( review.date_of_submission );
        node.find( '.review-body' ).html( review.description );
        node.find( '.review_source' ).html( review.review_source );
        node.find( '.review-footer i' ).addClass( 'fa-'+searchTypes[Number(review.review_from)] );
    }

    function getStars( rating ){
       var solid = Math.floor( rating );
       var stars = '';
       for( var s=0; s<5; s++ ){
           var variation = (s<solid)? '' 
                           : (s==solid &&  rating-solid>0.5)? '-half-o' 
                           : '-o';
           stars += '<i class="fa fa-star' + variation + '"></i>';
       }
       return stars;
    }

</script>

</body>
</html>
