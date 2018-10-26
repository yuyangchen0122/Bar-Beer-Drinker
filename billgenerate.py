import pandas as pd
from pandas import Series, DataFrame
import random
import csv
from datetime import datetime, time, timedelta
import numpy as np

bar_df = pd.read_csv('BAR.csv')
drinker_df = pd.read_csv('DRINKER.csv')


def random_date():
    return (str(pd.to_datetime(random.choice(pd.bdate_range('2015/1/1', '2018/12/31'))))[:10])


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


bar_df = pd.read_csv('BAR.csv')
drinker_df = pd.read_csv('DRINKER.csv')

bar_state = bar_df.State.tolist()
bar_bar_license = bar_df.License.tolist()
bar_name = bar_df.Bar.tolist()


def lookup_bar_state(License_list, State_list, License_id, Bar_list):
    index = License_list.index(License_id)
    return State_list[index]
    return Bar_list[index]


states = drinker_df.State.tolist()
drinker_name = drinker_df.Name.tolist()

file = open('BILL.csv', 'w')

with open('BAR.csv') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    line_count = 0
    for row in csv_reader:
        for i in range(250):
            t = random.randint(80, 100)
            for j in range(t):
                open_hour = bar_df['Open'][i]
                close_hour = bar_df['Close'][i]
                bar_license = bar_df['License'][i]
                bar_name = bar_df['Bar'][i]

                ran_time = random_time(open_hour, close_hour)
                date = random_date()

                st = lookup_bar_state(bar_bar_license, bar_state, bar_license, bar_name)
                person_name = drinker_name[random_person(states, st)]
                s = ','
                seq = (ran_time, str(date), str(person_name), str(bar_license), str(bar_name))
                temp = s.join(seq)
                file.write(temp + '\n')
                print(line_count)
                line_count += 1
file.close()

