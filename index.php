<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cake order</title>
    <style>

    </style>
</head>

<body>



    <form method="post" enctype="multipart/form-data">

        <div class="container">
            <label for="cName">Coustomer Name</label>
            <input type="text" placeholder="enter your name.." name="cName" id="cName">
        </div>

        <div class="container">
            <label for="mNO">Mobile No.</label>
            <input type="number" min="0" name="mobile" id="mNO">
        </div>

        <div class="container">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="container">
            <label for="cake">Select Your Cake</label>
            <select name="cake" id="cake">
                <option value="" selected disabled>---select here</option>
                <option value="venila">venila</option>
                <option value="strwbarry">strwbarry</option>
                <option value="chocolate">chocolate</option>
                <option value="spacial">spacial</option>
            </select>
        </div>

        <div class="container">
            <label for="rate">Rate</label>
            <input type="number" disabled name="rate" id="rate">
        </div>

        <div class="container">
            <label for="qty">Quantity</label>
            <input type="number" min="1" name="qty" id="qty">

        </div>

        <div class="container">
            <label for="image">Choose Image</label>
            <input type="file" name="image" id="image">
        </div>



        <input type="submit" name="submit" value="upload">

    </form>

    <script>
        cake.addEventListener("change",()=>{
        let cake = document.getElementById('cake').value;
       let rate = document.getElementById('rate');

            switch (cake) {
                case 'venila': rate.value = 1
                    break;
                case 'strwbarry': rate.value = '';
                    break;
                    
                
            }
            
        });
    </script>
</body>

</html>