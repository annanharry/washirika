import pandas as pd

dataset = pd.read_excel('D:\Xampp\htdocs\washirika-1\code\pythoncode\RiskClassificationReport.xlsx')

#drop rows with null values
dataset=dataset.dropna()

#drop columns with data not needed
dataset=dataset.drop(['MemberNo','PhoneNo','StartDate','LoanMaturity','RepayFormular','theNames','CategoryName','PayrollNo','LoanSerialNumber','TheLoanBal','Arrears','Months','Provision','Provisioning','EmployerName.1','TheDays','AmortizationType','AmountLastPaid','IssueDate','DateLastPaid','PhoneNo.1','DOB','IDNumber'],axis=1)

print(dataset.columns)