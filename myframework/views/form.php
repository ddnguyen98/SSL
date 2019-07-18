<div class="container">
    <form method="POST"  action="/registration/formlogin">
    <div class="form-group">
        <label for="email">Username</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="Bio">Bio</label>
        <textarea type="text" class="form-control" id="Bio" name="bio" placeholder="Write your bio here"></textarea>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
        <label class="form-check-label" for="male">
            Male
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
        <label class="form-check-label" for="female">
            Female
        </label>
    </div>
    <div class="form-check">
        <input type="hidden" name="newsletter" value="false" />
        <input type="checkbox" class="form-check-input" id="news" name="newsletter" value="true">
        <label class="form-check-label" for="news">Sign up for news letter?</label>
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <select class="custom-select" id="age" name="age">
            <?php
            for ($i=1; $i <= 100; $i++) { 
                echo "<option value='".$i."'>".$i."</option>";
            };
            ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-secondary" id="ajaxBtn">Ajax Submit</button>
    </form>
</div>



