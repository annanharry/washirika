import pandas as pd
import numpy as np
import joblib
from sklearn import datasets, linear_model
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.metrics import classification_report, confusion_matrix, accuracy_score
from sklearn.linear_model import LogisticRegression

dataset = pd.read_csv('D:\Xampp\htdocs\washirika-1\code\pythoncode\cleaned.csv')

X = dataset.iloc[:,4:].values
y = dataset.iloc[:,5].values

#80:20 train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=0)

sc = StandardScaler()
X_train = sc.fit_transform(X_train)
X_test = sc.transform(X_test)

#save
joblib.dump(sc, 'D:\Xampp\htdocs\washirika-1\code\pythoncode\f2_Normalisation_Risk_Data')

#Risk model building
classifier =  LogisticRegression()
classifier.fit(X_train, y_train)
y_pred = classifier.predict(X_test)

joblib.dump(classifier, 'D:\Xampp\htdocs\washirika-1\code\pythoncode\f1_Classifier_Risk_Data')