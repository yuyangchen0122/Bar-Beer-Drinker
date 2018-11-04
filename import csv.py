import csv
import pandas
import random
from datetime import datetime, time, timedelta
import numpy as np

def random_date():
    return (str(pandas.to_datetime(random.choice(pandas.bdate_range('2015/1/1', '2017/12/30'))))[:10])

def random_time(start,end):
    end1= end[0:2]
    end2 = end[3:5]
    start1 = start[0:2]
    start2 = start[3:5]
    start_datetime = datetime(2016,8,17,int(start1),int(start2),0,0)
    end_datetime = datetime(2016,8,17,int(end1),int(end2),0,0)
    delta = end_datetime-start_datetime
    inc = random.randrange(delta.total_seconds())
    temp = start_datetime+timedelta(seconds=inc)
    return (str(temp)[-8:])

def random_person(list, key):
    values = np.array(list)
    searchval = key
    ii = np.where(values == searchval)[0]
    index_of_state = random.choice(ii)
    return index_of_state

df = pandas.read_csv("Open_Hours.csv")
df1 = pandas.read_csv("Customer.csv")
bar_info = pandas.read_csv("Bar.csv")

bar_state = bar_info.state.tolist()
bar_bar_lisence = bar_info.bar_license.tolist()

def lookup_bar_state(lisence_list, state_list, lisence_id):
    index = lisence_list.index(lisence_id)
    return state_list[index]

states = df1.state.tolist()
costumer_name = df1.name.tolist()


file = open('Bill.csv', 'w')

with open('Bar.csv') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    line_count = 0
    for row in csv_reader:

        if line_count == 0:
            line_count += 1
        else:
            for i in range(609):
                t = random.randint(25, 43)

                for j in range(t):
                    open_hour = df['open_hour'][i]
                    close_hour = df['close_hour'][i]
                    bar_lisence = df['bar_license'][i]
                    ran_time = random_time(open_hour,close_hour)
                    date = random_date()

                    st = lookup_bar_state(bar_bar_lisence, bar_state, bar_lisence)
                    person_name = costumer_name[random_person(states, st)]
                    s =','
                    seq = (ran_time, str(date), str(person_name), str(bar_lisence))
                    temp = s.join(seq)
                    file.write(temp + '\n')
                    print(line_count)
                    line_count += 1

file.close()



# with open('Bill.csv', 'w', newline='') as f:
#     fieldnames = [ 'issue_time', 'date', 'customer','bar_license']
#     writer = csv.DictWriter(f, fieldnames=fieldnames)
#     writer.writeheader()
#
#
#     for i in range(609):
#
#         writer.writerow({'issue_time', 'date', 'customer','day','bar_license' })