<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <style>
            #box{
                padding: 10px;
            }

            #box h1{
                font-size: 30px;
            }

            #box input[type="submit"]{
                width: 100%;
                background-color: #2C73B0;
                padding: 5px;
                border: 2px solid #3A99D3;
                color: white;
            }

            #box input[type="submit"]:hover{
                background-color: #3A99D3;
                border: 2px solid #2C73B0;
            }
        </style>
    </head>
    <body>
        <div id="box">
        <h1>Admission Form:-</h1>
        <hr />
        <br />
        <form action="insert.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <table>
                <tr>
                    <td class="lbl"><label>First Name:</label></td> <td class="inpt"><input type="text" name="fstname" size="50" required /></td>
                </tr>
                <tr>
                    <td class="lbl"><label>Last Name:</label></td> <td class="inpt"><input type="text" name="lstname" size="50" required /></td>
                </tr>
                <tr>
                    <td class="lbl"><label>Father's Name:</label></td> <td class="inpt"><input type="text" name="fname" size="50" required /></td>
                </tr>
                <tr>
                    <td class="lbl"><label>Mother's Name:</label></td> <td class="inpt"><input type="text" name="mname" size="50" required /></td>
                </tr>
                <tr>
                    <td class="lbl"><label>D.O.B.:</label></td> <td class="inpt"><select name="d" required>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                    <option value="9">9</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="11">11</option>
                                                                                    <option value="12">12</option>
                                                                                    <option value="13">13</option>
                                                                                    <option value="14">14</option>
                                                                                    <option value="15">15</option>
                                                                                    <option value="16">16</option>
                                                                                    <option value="17">17</option>
                                                                                    <option value="18">18</option>
                                                                                    <option value="19">19</option>
                                                                                    <option value="20">20</option>
                                                                                    <option value="21">21</option>
                                                                                    <option value="22">22</option>
                                                                                    <option value="23">23</option>
                                                                                    <option value="24">24</option>
                                                                                    <option value="25">25</option>
                                                                                    <option value="26">26</option>
                                                                                    <option value="27">27</option>
                                                                                    <option value="28">28</option>
                                                                                    <option value="29">29</option>
                                                                                    <option value="30">30</option>
                                                                                    <option value="31">31</option>
                                                                                </select>
                                                                                &nbsp;&nbsp;<select name="m" required>
                                                                                                <option value="1">1</option>
                                                                                                <option value="2">2</option>
                                                                                                <option value="3">3</option>
                                                                                                <option value="4">4</option>
                                                                                                <option value="5">5</option>
                                                                                                <option value="6">6</option>
                                                                                                <option value="7">7</option>
                                                                                                <option value="8">8</option>
                                                                                                <option value="9">9</option>
                                                                                                <option value="10">10</option>
                                                                                                <option value="11">11</option>
                                                                                                <option value="12">12</option>
                                                                                            </select>
                                                                                 &nbsp;&nbsp;<select name="y" required>
                                                                                                        <option value="1990">1990</option>
                                                                                                        <option value="1991">1991</option>
                                                                                                        <option value="1992">1992</option>
                                                                                                        <option value="1993">1993</option>
                                                                                                        <option value="1994">1994</option>
                                                                                                        <option value="1995">1995</option>
                                                                                                        <option value="1996">1996</option>
                                                                                                        <option value="1997">1997</option>
                                                                                                        <option value="1998">1998</option>
                                                                                                        <option value="1999">1999</option>
                                                                                                        <option value="2000">2000</option>
                                                                                                        <option value="2001">2001</option>
                                                                                                        <option value="2002">2002</option>
                                                                                                        <option value="2003">2003</option>
                                                                                                        <option value="2004">2004</option>
                                                                                                      </select></td>
                </tr>
                <tr>
                    <td class="lbl"><label>Address:</label></td> <td class="inpt"><input type="text" name="adrs" size="100" required /></td>
                </tr>
                <tr>
                    <td class="lbl"><label>Contact no.:</label></td> <td class="inpt"><input type="number" name="contact" size="10" required /></td>
                </tr>
                <tr>
                    <td class="lbl"><label>Photo of applicant:</label></td> <td class="inpt"><input type="file" name="aimg" size="100" required /></td>
                </tr>
                <tr>
                    <td class="lbl"><label>Course:</label></td> <td class="inpt"><select name="course" required>
                                                                                    <option value="1">B.C.A.</option>
                                                                                    <option value="2">B.B.A.</option>
                                                                                    <option value="3">B.Ed.</option>
                                                                                    <option value="4">P.G.D.C.P.</option>
                                                                                 </select></td>
                </tr>
                <tr>
                    <td class="lbl"><label>Year of passing high school:</label></td> <td class="inpt"><select name="yophs" required>
                                                                                                        <option value="2000">2000</option>
                                                                                                        <option value="2001">2001</option>
                                                                                                        <option value="2002">2002</option>
                                                                                                        <option value="2003">2003</option>
                                                                                                        <option value="2004">2004</option>
                                                                                                        <option value="2005">2005</option>
                                                                                                        <option value="2006">2006</option>
                                                                                                        <option value="2007">2007</option>
                                                                                                        <option value="2008">2008</option>
                                                                                                        <option value="2009">2009</option>
                                                                                                        <option value="2010">2010</option>
                                                                                                        <option value="2011">2011</option>
                                                                                                        <option value="2012">2012</option>
                                                                                                        <option value="2013">2013</option>
                                                                                                        <option value="2014">2014</option>
                                                                                                        <option value="2015">2015</option>
                                                                                                        <option value="2016">2016</option>
                                                                                                        <option value="2017">2017</option>
                                                                                                        <option value="2018">2018</option>
                                                                                                      </select></td>
                </tr>
                <tr>
                    <td class="lbl"><label>Year of passing Intermediate:</label></td> <td class="inpt"><select name="yopi" required>
                                                                                                        <option value="1">2002</option>
                                                                                                        <option value="2">2003</option>
                                                                                                        <option value="3">2004</option>
                                                                                                        <option value="4">2005</option>
                                                                                                        <option value="5">2006</option>
                                                                                                        <option value="6">2007</option>
                                                                                                        <option value="7">2008</option>
                                                                                                        <option value="8">2009</option>
                                                                                                        <option value="9">2010</option>
                                                                                                        <option value="10">2011</option>
                                                                                                        <option value="11">2012</option>
                                                                                                        <option value="12">2013</option>
                                                                                                        <option value="13">2014</option>
                                                                                                        <option value="14">2015</option>
                                                                                                        <option value="15">2016</option>
                                                                                                        <option value="16">2017</option>
                                                                                                        <option value="17">2018</option>
                                                                                                      </select></td>
                                                                                                      
                </tr>
                <tr>
                    <td class="lbl"><label>Year of passing Graduation:</label></td> <td class="inpt"><select name="yopg">
                                                                                                        <option value="0">not graduate</option>
                                                                                                        <option value="1">2004</option>
                                                                                                        <option value="2">2005</option>
                                                                                                        <option value="3">2006</option>
                                                                                                        <option value="4">2007</option>
                                                                                                        <option value="5">2008</option>
                                                                                                        <option value="6">2009</option>
                                                                                                        <option value="7">2010</option>
                                                                                                        <option value="8">2011</option>
                                                                                                        <option value="9">2012</option>
                                                                                                        <option value="10">2013</option>
                                                                                                        <option value="11">2014</option>
                                                                                                        <option value="12">2015</option>
                                                                                                        <option value="13">2016</option>
                                                                                                        <option value="14">2017</option>
                                                                                                        <option value="15">2018</option>
                                                                                                      </select></td>
                                                                                                      
                </tr>
                <tr>
                    <td class="lbl"><label>Photo of signature:</label></td> <td class="inpt"><input type="file" name="simg" size="100" required /></td>
                </tr>
            </table>
            <br />
            <input type="submit" name="submit" value="SUBMIT" />
        </form>
        </div>
    </body>
</html>