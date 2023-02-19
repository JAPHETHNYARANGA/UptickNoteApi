<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>UptickNoteApi</title>
</head>
<body class="container">
    @foreach ($user as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    <h2 class="text-center">Uptick Note Api </h2>
    <br>
    <br>
    <h4 class="text-center">Authentication</h4>
    <br>
    <br>
    <h4 class="text-center mt-2">Login Api</h4>

    <p>Login endpoint - <b>/api/login</b></p>
    <p>The required parameters for login are <b>email</b> and <b>password.</b></p>
    <p>The expected login sucess response is <b>{<br>
        "success": true,<br>
        "user": {<br>
       "id": 1,<br>
        "name": "japheth",<br>
       "email": "nyaranga4@gmail.com",<br>
       "email_verified_at": null,<br>
       "created_at": "2023-02-16T14:32:01.000000Z",<br>
       "updated_at": "2023-02-16T14:32:01.000000Z"<br>
        },<br>
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZGJhYmU1OTdjOWJhOWZlZjUwZTgzMmjfxtwyJNyz0IFM93N-za8Mb1Y2FWL1DH__vNJzLLm1umjVQEkuSkjFNh6SeT_YzAwWCJIlqLxFDO4ID1Fa2-eXT5rRV-AESkv2U4ytfOCkmZxQ8mdjy7OoGjfGaRhq80H07LJnbbN0SLuHbaYvjT_1BeFyGK_6Kt-gN2KQe-1DhLS2tXPgR-2XpvF_pgQ1YRqhzu91IcIiILR8RUkbKO2Mc4P9yqYxu8Imh0JQuLI5EUpdwspR57UVtjz9SWS1v2akcsHlQjuNmcZn1raEaU-6Luuvh35sYEkEIj8s4mkjX1G1L5y_TJL6Dtf9NvTa3dlsEmQLZncB-pR9mpMO9nmeYuO50HRgJ7KAs0I1KlZId4OFNSmIKIPYNt02ssPPDBv8ZHv5IR8g74S7XGfRV8IqnzAVaL8IIqOQQxCCjOa38dq-vXy4DzvQCPKIddi8Qz5vbVYu5r0pElB746BDEVaiBieNYi5m8GYHzSriHZwYz1JKurvBLYwAdz6aF8Y5Z9j7nOfrFSPQRsVG6wYlQijV_NLH9zQ2xCqq3bLtHx0YrHIDnBHyBmrXs9FRCcuZNdspP2rd6N3EQyx8e__1dy-xwbkdGGvaE0iZt_oastNnfWSCDOy_4krXOHIMK9vdjoD8E-RTZCAxSFaMVFQFDmGAAtihuT86vJkgKWtUeFt30" }    
    </b></p>



    <h4 class="text-center mt-2">Register Api</h4>
    <p>Register endpoint - <b>/api/register</b></p>
    <p>Register user parameters are <b>name</b> , <b>email</b> and <b>password.</b></p>

    <p>Register response is<b> {<br>
        "success": true,<br>
        "message": "user registered successfully",<br>
        "user": { <br>
        "name": "japheth nyaranga", <br>
        "email": "nyaranga@gmail.com",<br>
        "updated_at": "2023-02-17T05:55:32.000000Z",<br>
        "created_at": "2023-02-17T05:55:32.000000Z",<br>
        "id": 2<br>
        }<br>
        }</b><br></p>

    <h4 class="text-center mt-2">Notes</h4>


    <h4 class="text-center">Add notes</h4>
        <p>To Create a new note, the end point is <b>/api/addnote</b></p>
        <p>The url header must contain the token that was created when the user logged in in the header parameter.  <br><b>POST /api/addnote<br>
            Host: http://127.0.0.1:8000/<br>
            Authorization: Bearer <your_token_here><b><br></p>

        <p>The expected successful response is<br>
            <b>{<br>
            "success": true,<br>
            "message": "note added successfully"<br>
            }<b><br>
            </p>        

    <h6 class="text-center">get notes</h6>
     <p>To get all notes, the end point is <b>/api/getnotes</b></p>       
    
     <p>The url header must contain the token that was created when the user logged in in the header parameter. <br><b>GET /api/getnotes<br>
        Host: http://127.0.0.1:8000/<br>
        Authorization: Bearer <your_token_here><br>
        </b>
        </p>

        <p>
            The expected successful response is<br>
            <b>{<br>
            "success": true,<br>
            "notes": [<br>
            {<br>
            "id": 1,<br>
            "title": "title1",<br>
            "body": "this is my body",<br>
            "created_at": "2023-02-16T14:33:33.000000Z",<br>
            "updated_at": "2023-02-16T14:33:33.000000Z"<br>
            },<br>
            {    "id": 2,<br>
            "title": "title1",<br>
            "body": "this is my body",<br>
            "created_at": "2023-02-16T14:34:09.000000Z",<br>
            "updated_at": "2023-02-16T14:34:09.000000Z"<br>
            },<br>
            {<br>
            "id": 4,  "title": "title1",<br>
            "body": "this is my body",<br>
            "created_at": "2023-02-16T14:34:11.000000Z",<br>
            "updated_at": "2023-02-16T14:34:11.000000Z"<br>
            },<br>
            {<br>
            "id": 5,<br>
            "title": "title1",<br>
            "body": "this is my body",<br>
            "created_at": "2023-02-16T17:29:02.000000Z",<br>
            "updated_at": "2023-02-16T17:29:02.000000Z"<br>
            }<br>
            ]<br>
            }<br></b>
        </p>
    <h4 class="text-center">get specific note id</h4>
    <p>To get a specific note, the end point is <b>/api/getnote/{id}</b></p>
    <p>The id is the specific id of the note that is obtained when all the notes are fetched.</p>
    <p>The url header must contain the token that was created when the user logged in in the header parameter. <br><b>GET /    api/getnote/{id}<br>
        Host: http://127.0.0.1:8000/<br>
        Authorization: Bearer <your_token_here></b></p><br>

    <p>The expected successful response is<br>
       <b> {<br>
        "success": true,<br>
        "note": {<br>
         "id": 1,<br>
        "title": "titlle",<br>
        "body": "bodyy",<br>
        "created_at": "2023-02-16T14:33:33.000000Z",<br>
        "updated_at": "2023-02-16T18:00:23.000000Z"<br>
        }<br>
        }</b></p>    <br>    

    <h4 class="text-center">delete specific note id</h4>
    <p>To delete a specific note, the end point is <b>/api/deletenote/{id}</b></p>
    <p>The id is the specific id of the note that is obtained when all the notes are fetched.</p>
    <p>The url header must contain the token that was created when the user logged in in the header parameter.<br> <b>GET /api/deletenote/{id}<br>
        Host: http://127.0.0.1:8000/<br>
        Authorization: Bearer <your_token_here><br>
        </b>
        </p>

     <p>The expected successful response is<br>
       <b> {<br>
        "success": true,<br>
        "message": "note deleted successfully"<br>
        }</b><br>
    </p>   

    <h4 class="text-center">update specific note id</h4>
    <p>To update a specific note, the end point is <b>/api/updatenotes/{id}</b></p>
    <p>The id is the specific id of the note that is obtained when all the notes are fetched.</p>
    <p>The url header must contain the token that was created when the user logged in in the header parameter. <br><b>PUT /api/updatenotes/{id}<br>
        Host: http://127.0.0.1:8000/<br>
        Authorization: Bearer <your_token_here><b><br></p>

    <p>When testing the update url on postman the parameters to be updated should be attached to the url as shown :<br>

        <b>PUT :: http://127.0.0.1:8000/api/updatenotes/1?title=update title updated&body=update body</b></p>
    
    <p>The expected successful response is<br>
       <b> {<br>
        "success": true,<br>
        "message": "note updated successfully"<br>
        }<b>
    </p>    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>