import pandas as pd
import numpy as np

from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.metrics import classification_report, confusion_matrix, accuracy_score
from sklearn.linear_model import LogisticRegression

#replace this Google Drive bit with the local file getter
from google.colab import drive
drive.mount('/content/drive')
dataset = pd.read_excel("/content/drive/My Drive/Project 2022/RiskClassificationReport.xlsx")

#dataset.shape

#dataset.head()

dataset=dataset.drop(['MemberNo','PhoneNo','theNames','IDNumber','PhoneNo.1','StartDate','LoanMaturity','DateLastPaid','IssueDate'], axis=1)
#dataset.shape

#dataset.head()

dataset.isna().sum()

dataset=dataset.dropna()
dataset.isna().sum()

#dataset

y = dataset.iloc[:,0].values
X = dataset.iloc[:, 1:29].values

X_train, X_test, y_train, y_test = train_test_split(X,y, test_size=0.2, random_state=0)

columns = dataset.columns.tolist()
columns = [c for c in columns if c not in ["test", 'DOB']]

# Exporting Normalisation Coefficients for later use in prediction
import joblib
joblib.dump(sc, '/content/drive/My Drive/Project1_Credit_Scoring/f2_Normalisation_CreditScoring')

classifier = LogisticRegression()
classifier.fit(X_train, y_train)
y_pred = classifier.predict(X_test)

sc = StandardScaler()
X_train = sc.fit_transform(X_train)
X_test = sc.transform(X_test)

# Exporting Logistic Regression Classifier for later use in prediction

# import joblib
joblib.dump(classifier, '/content/drive/My Drive/Project1_Credit_Scoring/f1_Classifier_CreditScoring')

print(confusion_matrix(y_test,y_pred))

print(accuracy_score(y_test, y_pred))

predictions = classifier.predict_proba(X_test)
predictions

# writing model output file

df_prediction_prob = pd.DataFrame(predictions, columns = ['prob_0', 'prob_1'])
df_prediction_target = pd.DataFrame(classifier.predict(X_test), columns = ['predicted_TARGET'])
df_test_dataset = pd.DataFrame(y_test,columns= ['Actual Outcome'])

dfx=pd.concat([df_test_dataset, df_prediction_prob, df_prediction_target], axis=1)

dfx.to_csv("/content/drive/My Drive/Project1_Credit_Scoring/c1_Model_Prediction.xlsx", sep=',', encoding='UTF-8')

dfx.head()