import pandas as pd
#import numpy as np
#import joblib
import pickle
from sklearn import datasets, linear_model
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
#from sklearn.metrics import classification_report, confusion_matrix, accuracy_score
from sklearn.linear_model import LogisticRegression

#reading csv file with pandas
dataset=pd.read_csv('D:\Xampp\htdocs\washirika-1\code\Flask\washirika\Venv\cleaned1.csv')

#dataset=dataset.drop(['Unnamed: 0'],axis=1)
X = dataset.iloc[:,3:].values
y = dataset.iloc[:,3].values

#80:20 train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=0)

#normalization
sc = StandardScaler()
X_train = sc.fit_transform(X_train)
X_test = sc.transform(X_test)


#Risk model building - classifier
#instantiate 
classifier =  LogisticRegression()
#fit the model
classifier.fit(X_train, y_train)
y_pred = classifier.predict(X_test)

#pickle file of the model
pickle.dump(classifier, open("D:\Xampp\htdocs\washirika-1\code\Flask\washirika\Venv\model.pkl", "wb"))