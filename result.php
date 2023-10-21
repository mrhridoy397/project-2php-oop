<style>
    * {
        margin: 0;
        padding: 0;
        font-family: Century Schoolbook;

    }

    body {
        background-image: url('../img/bg.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;

    }

    .fcti_result {
        width: 643px;
        height: 590px;
        background: #fff;
        margin: 0 auto;
        padding: 10px;
        border-radius: 5px;
        margin-top: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        box-sizing: border-box;
        margin-left: auto;
        margin-right: auto;
        padding-left: 10px;
        padding-right: 10px;


    }


    .header {
        display: flex;
        flex-direction: row;
        /* align-items:center; */
        height: 100px;
    }

    .header .left_site {
        background: #eee;
        height: 105px;
        border-top-left-radius: 8px;

    }

    .header .left_site img {
        padding: 20px;
        width: 80px;
        height: 80px;
        position: relative;
        top: -7px;
    }

    .header .right_site .banner {
        background: #2E96D3;
        background-repeat: no-repeate;
        background-size: cover;
        background-position: center;
        width: 505px;
        height: 41px;
        border-top-right-radius: 8px;
    }

    .header .right_site .banner h1 {
        color: #fff;
        font-size: 20px;
        line-height: 42px;
        padding-left: 5px;
        letter-spacing: 1px;
        font-weight: bold;
        position: relative;
        text-align: center;

    }

    .header .right_site .banner h1::before {
        position: absolute;
        content: "";
        background-image: radial-gradient(#fafafa 3px, transparent 0px);
        background-size: 0.9375rem 0.9375rem;
        height: 100%;
        width: 100%;
        opacity: 0.1;

    }

    .header .right_site .part1 {
        background: #01588c;
        padding: 5px;
        font-size: 21px;
        border-top: 1px solid #ff7ec1;
        color: #fbfbfb;
        text-align: right;


    }

    .header .right_site .part2 {
        background: #2E96D3;
        text-align: right;
        padding: 6px;
        color: #fff;
        font-size: 12px;
        font-weight: bolder;
        letter-spacing: 1px;
    }

    .main_div {
        position: relative;
    }

    .main_div .content {
        border: 2px solid #dfdfdf;
        width: 530px;
        height: 300px;
        margin: 0 auto;
        margin-top: 50px;
        padding: 20px 40px;
        box-sizing: border-box;
    }

    .main_div .content input,
    select {
        width: 280px;
        box-sizing: border-box;
        border-radius: 4px;
        margin: 5px 0;
        background: #F4F0F2;
        border: 1px solid gray;
        font-size: 15px;
        padding: 8px 5px;


    }

    .main_div .content table tr td {
        font-size: 17px;
    }

    .main_div .content table tr td span {
        margin: 0 30px;
    }

    .button {
        display: flex;
        justify-content: flex-end;
        margin-right: 40px;
    }

    .button input[type="submit"],
    .button input[type="reset"] {
        width: 80px;
        margin-right: 8px;
        border: none;
        background: #2E96D3;
        color: #fff;
        cursor: pointer;


    }

    .button input[type="submit"]:hover,
    .button input[type="reset"]:hover {
        background: #2E96D3;
    }

    .footer {
        width: 100%;
        height: 100px;
        background: #eee;
        position: absolute;
        margin-top: 16px;
        border-top: 3px solid #46B64C;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 10px;
        box-sizing: border-box;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
    }

    .footer .left_site p {
        font-size: 12px;
        color: #818181;
    }

    .footer .right_site {
        display: flex;
        align-items: center;
    }

    .footer .right_site p {
        font-size: 12px;
        color: #818181;
    }

    .footer .right_site img {
        width: 100px;
        height: 100px;
        object-fit: contain;
        margin-left: 5px;
    }

    @media(max-width: 600px) {
        .fcti_result {
            zoom: 80%;
        }

        .main_div .content input,
        select {
            width: 300px !important;
            padding: 10px 5px !important;


        }

        .button input[type="submit"],
        .button input[type="reset"] {
            width: 90px !important;
            font-size: 18px;
            text-align: center;





        }
    }
</style>

<div class="fcti_result">
    <div class="header">
        <div class="left_site">
            <img src="./assets/img/logo-dark.png" alt="">
        </div>
        <div class="right_site">
            <div class="banner">
                <h1>CICTI RESULT MANAGEMENT SYSTEM</h1>
            </div>
            <p class="part1">
                CANVAS ICT INSTITUTE
            </p>
            <p class="part2">
                Official Website of CICTI
            </p>
        </div>
    </div>
    <div class="main_div">
        <div class="content">
            <form action="" method="POST">
                <table>
                    <tbody>
                        <tr>
                            <td>Course</td>
                            <td>
                                <span>:</span><select name="course" required="">
                                    <option value="Computer Office Application">Computer Office Application</option>

                                    <option value="Professional Graphic Design">Professional Graphic Design</option>

                                    <option value="Full Stack Web Development">Full Stack Web Development</option>

                                    <option value="Video Editing">Video Editing</option>

                                    <option value="Digital Marketing">Digital Marketing</option>

                                    <option value="English Spoken">English Spoken</option>

                                    <option value="Subject Wise Class">Subject Wise Class</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Year</td>
                            <td>
                                <span>:</span><select name="year" required="">

                                    <option value="">Select Passing Year</option>
                                    <option value="2037">2037</option>
                                    <option value="2036">2036</option>
                                    <option value="2035">2035</option>
                                    <option value="2034">2034</option>
                                    <option value="2033">2033</option>
                                    <option value="2032">2032</option>
                                    <option value="2031">2031</option>
                                    <option value="2030">2030</option>
                                    <option value="2029">2029</option>
                                    <option value="2028">2028</option>
                                    <option value="2027">2027</option>
                                    <option value="2026">2026</option>
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Session</td>
                            <td>
                                <span>:</span><select name="session" required="">
                                    <option value="">Select Session</option>
                                    <option value="January-March">January-March</option>
                                    <option value="January-June">January-June</option>
                                    <option value="April-June">April-June</option>
                                    <option value="July-September">July-September</option>
                                    <option value="July-December">July-December</option>
                                    <option value="October-December">October-December</option>
                                    <option value="January-December">January-December</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Reg: No</td>
                            <td>
                                <span>:</span><input type="text" name="reg_no" id="" required="">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="button">
                    <input type="reset" value="Reset">
                    <input type="submit" value="Submit" name="result_show">
                </div>
            </form>
        </div>
        <div class="footer">
            <div class="left_site">
                <p>Copyright © 2012-2023 FCTI Inc all rights reserved.</p>
            </div>
            <div class="right_site">
                <p>Powered by</p>
                <img src="./assets/img/logo-dark.png" alt="">
            </div>
        </div>
    </div>

</div>