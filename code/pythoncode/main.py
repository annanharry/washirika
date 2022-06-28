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