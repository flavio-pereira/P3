@extends('_master')

@section('body')
  <div class='container'>
    <h1>P3 - Flavio Pereira - Developers's Best Friend</h1>

    <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="images/image-cs.jpg" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <p> Welcome to Developers's Best Friend Tool! When you start creating your website, you always need to have some 
                text, users, and passwords to demostrate your work. This tool will help you to create those features. For the text, we can use lorem-ipsum
                text generator, where you can specify how many paragraphs you want. </p>
                <p> The random users will help you to create users where you can specify the number of users, birthday, address, and some profile
                description. Moreover, you can use the xkdc password to generate a random password, which allows you to choose from one to four words, one number, 
                one symbol, and all words with the first letter in uppercase. With that, you are going to create a strong password, making it harder to guess even by brute force.</p>
            </div>
            <!-- /.col-md-4 -->
        </div>
    
        <div class="row">
            <div class="col-md-4">
                <h2>Lorem Ipsum</h2>
                <p>Defined by <a href='http://www.lipsum.com/' target="_blank"> Lorem Ipsum website</a>, is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book."</p>
                <a class="btn btn-default" href='loremipsum'> Create Text </a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Random Users</h2>
                <p>This tool will help you to create random users where you can specify the number of users, birthday, address, and some profile
                description.</p>
                <a class="btn btn-default" href='user'> Create Users</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>xkcd Password</h2>
                <p>Generate a random password, which allows you to choose from one to four words, one number, 
                one symbol, and all words with the first letter in uppercase. With that, you are going to create a strong password, making it harder to guess even by brute force.</p>
                <a class="btn btn-default" href="xkcd-password">Create Password</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
@stop