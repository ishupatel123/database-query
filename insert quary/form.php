<html>
    <head>
        <title>
            registration form</title>
        </head>
        <body>
            <form  action="ins.php" method="POST">
                <table border="5">
                    <tr>
                        <h1>registration form</h1>
                    </tr>
                    <tr>
                        <td>FIRST NAME:</td>
                        <td><input type="text" name=
                        "fnm" placeholder="enter your first name" requried</td>
                    </tr>
                    <tr>
                        <td>LAST NAME:</td>
                        <td><input type="text" name=
                        "lnm" placeholder="enter your last name" requried</td>
                    </tr>
                    <tr>
                        <td>E-MAIL:</td>
                        <td><input type="email" name="email" placeholder="enter your email address" requried</td>
                    </tr>
                    <tr>
                        <td>CONTACT NO:</td>
                        <td><input type="contact" name=
                        "contact" requried</td>
                    </tr>
                    <tr>
                        <td>CITY:</td>
                        <td>
                            <select name="city" name="city">
                                <option values="rajkot">
                                    rajkot
                                </option>
                                <option values="jamnagar">
                                    jamnagar
                                </option>
                                <option values="surat">
                                    surat
                                </option>
                                <option values="gandhinagar">
                                    gandhinagar
                                </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>ADDRESS:</td>
                        <td>
                            <textarea cols="20" rows="6" name="add"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>COURSE:</td>
                        <td>
                            <select name="course" name="course">
                                <option values="BCA">
                                    BCA
                                </option>
                                <option values="BBA">
                                    BBA
                                </option>
                                <option values="B.COM">
                                    B.COM
                                </option>
                                <option values="LLB">
                                    gandhinagar
                                </option>
                                <option values="MCA">
                                    MCA
                                </option>
                                <option values="B.ED">
                                    B.ED
                                </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>DATE OF BIRTH:</td>
                        <td><input type="date" name=
                        "dob"  requried</td>
                    </tr>
                    <tr>
                        <td>GENDER:</td>
                        <td><input type="radio" name="rd" value="male">mal
                        <input type="radio" name="rd" value="female">female</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="sbt" value="insert">
                            <input type="reset" name="ret" value="clear">
                        </td>
                    </tr>


                </table>
            </form>
        </body>

</html>