    <footer class="footer">
        <section class="container">
            <p>Ictect, Inc. | Phone: 262-898-7277</p>
            <p><span id="contactus"><a href="#">Contact Us</a></span> | Cage Code: 52TM9 | <a href="#">Contract Vehicles</a></p>
            <p>Copyright &copy; Ictect, Inc. All Rights Reserved | <a href="#">Privacy Policy.</a></p>
        </section>
    </footer>
    <!-- modal popup -->
    <div class="form-popup-bg">
        <div class="form-container">
            <button id="btnCloseForm" class="close-button">X</button>
            <h1>Contact Us</h1>
            <form id="contactForm" method="POST">
                <div class="mb-30">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Your Name" required/>
                    <div id="nameError" class="error-message"></div>
                </div>
                <div class="mb-30">
                    <label for="">E-Mail Address</label>
                    <input class="form-control" type="text" id="email" name="email" placeholder="Enter Your E-mail Address" required/>
                    <div id="emailError" class="error-message"></div>
                </div>
                <div class="mb-30">
                    <label for="">Phone Number</label>
                    <input class="form-control" type="number" id="phonenumber" name="phonenumber" placeholder="Enter Your Phone Number" required/>
                    <div id="phoneError" class="error-message"></div>
                </div>
                <input type="button" class="btn" value="Submit" id="submit"/>
            </form>
            <div id="successMessage">Form submitted successfully!</div>
        </div>
    </div>
    <script src="assets/jquery.min.js"></script>
    <script src="assets/main.js"></script>
    </body>

    </html>