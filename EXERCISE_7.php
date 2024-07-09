<!DOCTYPE html>
<html>
<head>
    <title>Table</title>
    <style>
        table, td, th {
            border: 1px solid;
            text-align: left;
            border-collapse: collapse;
        }
        th {
            background-color: lightblue;
        }
        tr:nth-child(3) {
            background-color: grey;
        }
    </style>
    <script>
        function semak() {
            var matrik = document.borang.studentid.value;
            var namapel = document.borang.namastudent.value;

            if (matrik == "") {
                alert("Masukkan no matrik");
                document.borang.studentid.focus();
                return false;
            } else if (isNaN(matrik)) {
                alert("Pastikan dalam number");
                document.borang.studentid.focus();
                return false;
            } else if (namapel == "") {
                alert("Masukkan nama pelajar");
                document.borang.namastudent.focus();
                return false;
            } else {
                alert("No matrik: " + matrik + "\nNama: " + namapel);
                return true; // Add return true to allow form submission
            }
        }

        // Function to clear form fields
        function clearForm() {
            document.borang.reset();
        }
    </script>
</head>
<body>
    <h2>Student Details</h2>
    <form name="borang" action="">
        <fieldset>
            <legend>Enter your info in the form below</legend>
            <table>
                <tr>
                    <td>No Matrik</td>
                    <td><input type="text" name="studentid"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="namastudent"></td>
                </tr>
            </table>
        </fieldset>
        <input type="button" value="Submit" onClick="return semak();">
        <input type="reset" value="Clear Form" onclick="clearForm()">
    </form>
</body>
</html>
