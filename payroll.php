<!DOCTYPE html>
<html>
<head>
    <title>Employee Payroll</title>
    <link rel="stylesheet" type="text/css" href="css/payroll.css">
</head>
<body>
    <div class="container">
    <div class="picture-box">
            <img src="images/null.jpg" alt="Logo" class="logo-img">
        </div>
        <h1>EMPLOYEE PAYROLL</h1>
    </div>
    <div class="container">
        
        <form action="" method="post">
            <div class="section">
                <h2>EMPLOYEE DETAILS</h2>
                <div class="columns">
                    <div class="column">
                        <div class="form-group">
                            <label for="employee_number">Employee Number:</label>
                            <input type="text" id="employee_number" name="employee_number" required>
                        </div>
                        <div class="form-group">
                            <label for="department">Department:</label>
                            <input type="text" id="department" name="department" required>
                        </div>
                        <div class="form-group" style="display: flex; align-items: center;">
                            <label for="search">Search Employee : </label>
                        </div>
                    </div>
                    <div class="column">
                        <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" id="first_name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="middle_name">Middle Name:</label>
                            <input type="text" id="middle_name" name="middle_name">
                        </div>
                        <div>
                            <button type="submit" class="search-button" style="flex: 1;">Search &#128269;</button>
                        </div>
                    </div>
                    <div class="column">
                        <div class="form-group">
                            <label for="surname">Surname:</label>
                            <input type="text" id="surname" name="surname" required>
                        </div>
                        <div class="form-group">
                            <label for="civil_status">Civil Status:</label>
                            <input type="text" id="civil_status" name="civil_status" required>
                        </div>
                        <div class="form-group">
                            <label for="qualified_dependants">Qualified Dependents:</label>
                            <input type="text" id="qualified_dependants" name="qualified_dependants" required>
                        </div>
                    </div>
                    <div class="column">
                        <div class="form-group">
                            <label for="paydate">Paydate:</label>
                            <input type="text" id="paydate" name="paydate" required>
                        </div>
                        <div class="form-group">
                            <label for="employee_status">Employee Status:</label>
                            <input type="text" id="employee_status" name="employee_status" required>
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation:</label>
                            <input type="text" id="designation" name="designation" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="columns">
                    <div class="column">
                        <h2>BASIC INCOME</h2>
                        
                        <div class="form-group">
                            <label for="rate_per_hour">Rate per Hour:</label>
                            <input type="text" id="rate_per_hour" name="rate_per_hour" required>
                        </div>
                        <div class="form-group">
                            <label for="hours_per_cutoff">No. of Hours per Cut Off:</label>
                            <input type="text" id="hours_per_cutoff" name="hours_per_cutoff" required>
                        </div>
                        <div class="form-group">
                            <label for="income_per_cutoff">Income per Cut Off:</label>
                            <input type="text" id="income_per_cutoff" name="income_per_cutoff" required>
                        </div>
                    </div>
                    <div class="column">
                        <h2 style="font-weight: bold;">HONORARIUM INCOME</h2>
                        
                        <div class="form-group">
                            <label for="rate_honorarium">Rate per Hour:</label>
                            <input type="text" id="rate_honorarium" name="rate_honorarium" required>
                        </div>
                        <div class="form-group">
                            <label for="hours_honorarium">No. of Hours per Cut Off:</label>
                            <input type="text" id="hours_honorarium" name="hours_honorarium" required>
                        </div>
                        <div class="form-group">
                            <label for="income_honorarium">Income per Cut Off:</label>
                            <input type="text" id="income_honorarium" name="income_honorarium" required>
                        </div>
                    </div>
                    <div class="column">
                        <h2 style="font-weight: bold;">OTHER INCOME</h2>
                        
                        <div class="form-group">
                            <label for="rate_other">Rate per Hour:</label>
                            <input type="text" id="rate_other" name="rate_other" required>
                        </div>
                        <div class="form-group">
                            <label for="hours_other">No. of Hours per Cut Off:</label>
                            <input type="text" id="hours_other" name="hours_other" required>
                        </div>
                        <div class="form-group">
                            <label for="income_other">Income per Cut Off:</label>
                            <input type="text" id="income_other" name="income_other" required>
                        </div>
                    </div>
                    <div class="column">
                        <h2 style="font-weight: bold;">SUMMARY INCOME</h2>        
                        
                        <div class="column">
                            <div class="form-group">
                                <label for="gross_income">Gross Income:</label>
                                <input type="text" id="gross_income" name="gross_income" required readonly> <!-- Add readonly attribute -->
                            </div>
                            <div class="form-group">
                                <label for="net_income">Net Income:</label>
                                <input type="text" id="net_income" name="net_income" required readonly> <!-- Add readonly attribute -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <h2 style="font-weight: bold;">REGULAR DEDUCTIONS</h2>
                <div class="columns">
                    <div class="column">
                        <div class="form-group">
                            <label for="sss_contribution">SSS Contribution:</label>
                            <input type="text" id="sss_contribution" name="sss_contribution" required>
                        </div>
                    </div>
                    <div class="column">
                        <div class="form-group">
                            <label for="philhealth_contribution">Philhealth Contribution:</label>
                            <input type="text" id="philhealth_contribution" name="philhealth_contribution" required>
                        </div>
                    </div>
                    <div class="column">
                        <div class="form-group">
                            <label for="pagibig_contribution">PAG-IBIG Contribution:</label>
                            <input type="text" id="pagibig_contribution" name="pagibig_contribution" required>
                        </div>
                    </div>
                    <div class="column">
                        <div class="form-group">
                            <label for="income_tax_contribution">Income Tax Contribution:</label>
                            <input type="text" id="income_tax_contribution" name="income_tax_contribution" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class ="section">
                
                <h2 style="font-weight: bold;">DEDUCTION SUMMARY</h2>
                <div class="columns">
                    <div class="column">
                        <div class="form-group">
                                <label for="Total_Deduction">Total Deduction:</label>
                                <input type="text" id="total_deduction" name="total_deduction" required>
                        </div>
                    </div>  
                            <button type="button" class="blue-button">GROSS INCOME</button>
                            <button type="button" class="blue-button">NET INCOME</button>
                            <button type="button" class="green-button">SAVE</button>
                            <button type="button" class="green-button">UPDATE</button>
                            <button type="button" class="yellow-button">NEW</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        // JavaScript code to calculate Gross and Net Income
        document.getElementById("calculateGrossIncome").addEventListener("click", function() {
            // Fetch and calculate the values from other input fields
            const ratePerHour = parseFloat(document.getElementById("rate_per_hour").value) || 0;
            const hoursPerCutoff = parseFloat(document.getElementById("hours_per_cutoff").value) || 0;
            
            // Calculate Gross Income and update the input field
            const grossIncome = ratePerHour * hoursPerCutoff;
            document.getElementById("gross_income").value = grossIncome.toFixed(2);
        });

        document.getElementById("calculateNetIncome").addEventListener("click", function() {
            // Fetch and calculate the values from other input fields
            const grossIncome = parseFloat(document.getElementById("gross_income").value) || 0;
            const sssContribution = parseFloat(document.getElementById("sss_contribution").value) || 0;
            const philhealthContribution = parseFloat(document.getElementById("philhealth_contribution").value) || 0;
            const pagibigContribution = parseFloat(document.getElementById("pagibig_contribution").value) || 0;
            const incomeTaxContribution = parseFloat(document.getElementById("income_tax_contribution").value) || 0;
            
            // Calculate Net Income and update the input field
            const totalDeduction = sssContribution + philhealthContribution + pagibigContribution + incomeTaxContribution;
            const netIncome = grossIncome - totalDeduction;
            document.getElementById("net_income").value = netIncome.toFixed(2);
        });
        document.querySelector(".yellow-button").addEventListener("click", function() {
            window.location.href = "http://localhost/lpuc_web_development/payroll.php";
        });
        document.getElementById("calculateGrossIncome").addEventListener("click", function() {
            // Fetch and calculate the values from other input fields
            const ratePerHour = parseFloat(document.getElementById("rate_per_hour").value) || 0;
            const hoursPerCutoff = parseFloat(document.getElementById("hours_per_cutoff").value) || 0;

            // Calculate Gross Income and update the input field
            const grossIncome = ratePerHour * hoursPerCutoff;
            const grossIncomeInput = document.getElementById("gross_income");
            grossIncomeInput.value = grossIncome.toFixed(2);

            // Disable the Gross Income input field
            grossIncomeInput.disabled = true;
        });

        document.getElementById("calculateNetIncome").addEventListener("click", function() {
            // Fetch and calculate the values from other input fields
            const grossIncome = parseFloat(document.getElementById("gross_income").value) || 0;
            const sssContribution = parseFloat(document.getElementById("sss_contribution").value) || 0;
            const philhealthContribution = parseFloat(document.getElementById("philhealth_contribution").value) || 0;
            const pagibigContribution = parseFloat(document.getElementById("pagibig_contribution").value) || 0;
            const incomeTaxContribution = parseFloat(document.getElementById("income_tax_contribution").value) || 0;

            // Calculate Net Income and update the input field
            const totalDeduction = sssContribution + philhealthContribution + pagibigContribution + incomeTaxContribution;
            const netIncome = grossIncome - totalDeduction;
            const netIncomeInput = document.getElementById("net_income");
            netIncomeInput.value = netIncome.toFixed(2);

            // Disable the Net Income input field
            netIncomeInput.disabled = true;
        });
    </script>
</body>
</html>
