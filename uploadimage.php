<!DOCTYPE html>
<html>

<head>
    <title>Firebase Image Upload using HTML and JavaScript</title>
    <style>
        body {
            margin-top: 20px;
            margin-left: 450px;
        }
    </style>
</head>

<body>
    <input type="file" id="photo" onchange="uploadImage()" accept="image/jpeg, image/png" /><br>
    <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
    <h3 id="status"></h3>
    <p id="loaded_n_total"></p>
</body>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>
<script>
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyBTjX7S3OoZtgeQYr5NMKjC0qWr4VtmZTg",
        authDomain: "restapiprevail.firebaseapp.com",
        databaseURL: "https://restapiprevail-default-rtdb.firebaseio.com",
        projectId: "restapiprevail",
        storageBucket: "restapiprevail.appspot.com",
        messagingSenderId: "73324380164",
        appId: "1:73324380164:web:c3ceeefb7bf110db9fb551",
        measurementId: "G-Q1XYB95T84"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    console.log(firebase);

    function uploadImage() {
        const ref = firebase.storage().ref("dokumen_pelanggan/");
        const file = document.querySelector("#photo").files[0];
        const name = file.name;
        const metadata = {
            contentType: "image/jpeg"
        };
        const task = ref.child(name).put(file, metadata);
        task
            .then(function(snapshot) {
                document.getElementById("loaded_n_total").innerHTML = "";
                document.getElementById("status").innerHTML = "Uploaded";
                var url = snapshot.ref.getDownloadURL();
            });

        task.on('state_changed', function(snapshot) {
            // Observe state change events such as progress, pause, and resume
            // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
            var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            document.getElementById("progressBar").value = Math.round(progress);
            document.getElementById("loaded_n_total").innerHTML = Math.round(progress) + "% uploaded...please wait ";
            switch (snapshot.state) {
                case firebase.storage.TaskState.PAUSED: // or 'paused'
                    console.log('Upload is paused');
                    break;
                case firebase.storage.TaskState.RUNNING: // or 'running'
                    console.log('Upload is running');
                    break;
            }
        }, function(error) {
            // Handle unsuccessful uploads
        }, function() {
            // Handle successful uploads on complete
            // For instance, get the download URL: https://firebasestorage.googleapis.com/...
        });
    }


    const errorMsgElement = document.querySelector('span#errorMsg');
</script>

</html>