<form class="row g-3" method="post" action="#">
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" pattern="[A-Za-z ]+" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Phone No.</label>
        <input type="tel" class="form-control" name="phone" pattern="^\d{11}$" required>
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail4"
            pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required>
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Services</label>
        <select class="form-select form-select-lg" aria-label="">
            <option selected></option>
            <option value="Assignment">Assignment</option>
            <option value="Dissertation">Dissertation</option>
            <option value="Thesis">Thesis</option>
            <option value="Coursework">Coursework</option>
            <option value="Research Paper">Research Paper</option>
            <option value="Online Exam">Online Exam</option>
        </select>
    </div>

    <!-- <div class="mb-3 col-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Send Us Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize:none"
                            name="message" required></textarea>
                    </div> -->


    <div class="col-12 text-center btn34">
        <button type="submit" class="btn btn_yellow">Submit</button>
    </div>
</form>
