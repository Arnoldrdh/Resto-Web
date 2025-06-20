<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Image Testing</title>
</head>
<body>
    <div>
        <form action="/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                Name: 
                <input type="text" name="name" id="">
            </div>
            <div>
                description:
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div> <br><br>
            <div>
                image:
                <input type="file" name="image">
            </div>

            <div>
                price:
                <input type="number" name="price">
            </div>

            <div>
                <input type="text" name="category">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>