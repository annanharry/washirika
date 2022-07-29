import pandas as pd

dataset = pd.read_excel('D:\Xampp\htdocs\washirika-1\code\pythoncode\RiskClassificationReport.xlsx')

#drop rows with null values
dataset=dataset.dropna()

#drop columns with data not needed
dataset=dataset.drop(['MemberNo','PhoneNo','StartDate','LoanMaturity','RepayFormular','theNames','CategoryName','PayrollNo','LoanSerialNumber','TheLoanBal','Arrears','Months','Provision','Provisioning','EmployerName.1','TheDays','AmortizationType','AmountLastPaid','IssueDate','DateLastPaid','PhoneNo.1','DOB','IDNumber'],axis=1)

#converting some names to there numerical representation
#EmployerName
dataset.loc[dataset['EmployerName']== 'TEACHERS SERVICE COMMISSION','EmployerName'] = 1
dataset.loc[dataset['EmployerName']!= 1,'EmployerName'] = 0

#Boundery
dataset.loc[dataset['Boundery']=='Performing','Boundery'] = 1
dataset.loc[dataset['Boundery']!=1,'Boundery'] = 0

#LoanTypeName
dataset.loc[dataset['LoanTypeName']=='AGRIBUSINESS ADVANCE','LoanTypeName'] = 1
dataset.loc[dataset['LoanTypeName']=='EMERGENCY LOAN','LoanTypeName'] = 2
dataset.loc[dataset['LoanTypeName']=='INUKA LOAN','LoanTypeName'] = 3
dataset.loc[dataset['LoanTypeName']=='KARIBU LOAN','LoanTypeName'] = 4
dataset.loc[dataset['LoanTypeName']=='LOAN ADVANCE','LoanTypeName'] = 5
dataset.loc[dataset['LoanTypeName']=='LONG TERM SALARY ADVANCE','LoanTypeName'] = 6
dataset.loc[dataset['LoanTypeName']=='MAVUNO ADVANCE','LoanTypeName'] = 7
dataset.loc[dataset['LoanTypeName']=='MICRO FINANCE LOAN','LoanTypeName'] = 8
dataset.loc[dataset['LoanTypeName']=='MNOBLE SALARY ADVANCE','LoanTypeName'] = 9
dataset.loc[dataset['LoanTypeName']=='NORMAL LOAN','LoanTypeName'] = 10
dataset.loc[dataset['LoanTypeName']=='REFINANCING DEVELOPMENT LOAN','LoanTypeName'] = 11
dataset.loc[dataset['LoanTypeName']=='REFUND ADVANCE','LoanTypeName'] = 12
dataset.loc[dataset['LoanTypeName']=='SALARY ADVANCE LOAN','LoanTypeName'] = 13
dataset.loc[dataset['LoanTypeName']=='SCHOOL FEES LOAN','LoanTypeName'] = 14
dataset.loc[dataset['LoanTypeName']=='SHORT TERM AGRI-BUSINESS ADVANCE','LoanTypeName'] = 15
dataset.loc[dataset['LoanTypeName']=='SHORT TERM AGRI-BUSINESS ADV','LoanTypeName'] = 15
dataset.loc[dataset['LoanTypeName']=='SHORT TERM SALARY ADVANCE','LoanTypeName'] = 16
dataset.loc[dataset['LoanTypeName']=='SUPER ADVANCE','LoanTypeName'] = 17
dataset.loc[dataset['LoanTypeName']=='SUPER DEVELOPMENT LOAN','LoanTypeName'] = 18
dataset.loc[dataset['LoanTypeName']=='SUPERIOR LOAN','LoanTypeName'] = 19
dataset.loc[dataset['LoanTypeName']=='SUPREME SALARY ADVANCE','LoanTypeName'] = 20
dataset.loc[dataset['LoanTypeName']=='WELFARE ADVANCE','LoanTypeName'] = 21

#saving the file as a csv
path = 'D:\Xampp\htdocs\washirika-1\code\pythoncode\cleaned.csv'
with open(path, 'w', encoding = 'utf-8-sig') as f:
  dataset.to_csv(f)