<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Paper</title>
</head>
<body>
    <h1>Create Paper</h1>

    <form action="/paper" method="post" >
        @csrf
        <input type="hidden" name="status" value="Pending">
        <!-- <input type="hidden" name="userid" value="Input::get('userid')"> -->
        <ul>
            <li>
                <label for="title">Title : </label>
                <input type="text" name="title" id="title" required placeholder="Text Input">
            </li>

            <li>
                <label for="type">Type :</label>
                <input type="text" name="type" id="type" required placeholder="Simple, Elegant, etc">
            </li>

            <li>
                <label for="requirement">Requirement :</label>
                <input type="text" name="requirement" id="requirement" required placeholder="Text Input">
            </li>

            <li>
                <label for="description">Description :</label>
                <input type="text" name="description" id="description" required placeholder="Text Input">
            </li>

            <li>
                <label for="file">File Upload :</label>
                <input type="text" name="file" id="file">
            </li>

            <li><button type="submit" name="insert">Submit and Pay</button></li>
        </ul>
    </form>
</body>
</html>