<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- This is external js file i stored my form validations -->
    <script src="script.js"></script>

</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Student Information Form</h2>
        <form action="process-form.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

            <!-- Personal Information starts Here ---------------------------------->
            <fieldset>
                <legend>Personal Information</legend>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="place_of_birth">Place of Birth:</label>
                    <input type="text" class="form-control" name="place_of_birth" id="place_of_birth" required>
                </div>
                <div class="form-group">
                    <label for="date_of_birth">Date of Birth:</label>
                    <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea class="form-control" name="address" id="address" required></textarea>
                </div>
                <div class="form-group">
                    <label for="sex">Sex:</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="sex" value="male" required>
                        <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="sex" value="female" required>
                        <label class="form-check-label">Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone:</label>
                    <input type="tel" class="form-control" name="telephone" id="telephone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="profile_image">Profile Image:</label>
                    <input type="file" class="form-control-file" name="profile_image" id="profile_image"
                        accept="image/*">
                </div>
            </fieldset>

            <!-- Parent Information starts Here --------------------------------------------->
            <fieldset class="mt-4">
                <legend>Parent Information</legend>
                <div class="form-group">
                    <label for="parent_name">Parent's Name:</label>
                    <input type="text" class="form-control" name="parent_name" id="parent_name" required>
                </div>
                <div class="form-group">
                    <label for="parent_telephone">Parent's Telephone:</label>
                    <input type="tel" class="form-control" name="parent_telephone" id="parent_telephone" required>
                </div>
                <div class="form-group">
                    <label for="relationship">Relationship:</label>
                    <input type="text" class="form-control" name="relationship" id="relationship" required>
                </div>
            </fieldset>

            <!-- Academic Information starts Here -------------------------------------------->
            <fieldset class="mt-4">
                <legend>Academic Information</legend>
                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="text" class="form-control" name="id" id="id" required>
                </div>
                <div class="form-group">
                    <label for="faculty">Faculty:</label>
                    <input type="text" class="form-control" name="faculty" id="faculty" required>
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" class="form-control" name="department" id="department" required>
                </div>
                <div class="form-group">
                    <label for="class">Class:</label>
                    <input type="text" class="form-control" name="class" id="class" required>
                </div>
                <div class="form-group">
                    <label for="registration_date">Registration Date:</label>
                    <input type="date" class="form-control" name="registration_date" id="registration_date" required>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary mb-4">Submit</button>
        </form>
    </div>

</body>

</html>