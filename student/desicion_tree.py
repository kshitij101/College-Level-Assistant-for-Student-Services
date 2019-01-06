import sys
import MySQLdb
from sklearn import tree
# Open database connection
db = MySQLdb.connect("localhost","root","","class" )
dbc = MySQLdb.connect("localhost","root","","class" )
# prepare a cursor object using cursor() method
cursor = db.cursor()
# execute SQL query using execute() method.
cursor.execute("SELECT id,atte,syll,mock FROM user")
data = cursor.fetchall()
count = len(data)
x = []
for row in data:
	x.append([row[1],row[2],row[3]])
cursor.execute("SELECT per FROM user")
data = cursor.fetchall()
count = len(data)
y = []
for row in data:
	y.extend([row[0]])
# disconnect from server
db.close()
attendance = sys.argv[1]
syllabus = sys.argv[2]
mocktest = sys.argv[3]
#attendance,syllabus,mocktest
classifier = tree.DecisionTreeClassifier()
classifier = classifier.fit(x,y)
prediction = classifier.predict([[attendance,syllabus,mocktest]])
print(prediction)
