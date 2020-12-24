<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
   <div class="about" style="margin:auto; width:500px;">
        <!-- <h1>Abdullah Al Noman</h1>
        <h2>web designer and web developer</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat provident esse autem. Expedita, hic quis minus architecto aliquam culpa asperiores nemo fugiat obcaecati provident dicta corporis, et, cumque consequuntur nostrum.</p> -->


    <?php?>
    <?php?>
    @php
    echo "Hello World";
    echo "<br/>";
    echo "amara sunar bangla ami ";
    @endphp

    @php
        echo "<br/>";
        $var_one = 25;
        echo $var_one;
        echo "<br/>";
    @endphp

        @for($i = 1; $i <= 10; $i++)
        <h1 class="text-danger">{{ $i }}: Hellow World</h1>
        @endfor


   </div>
</body>
</html>
