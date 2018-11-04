import pandas as pd
from pandas import Series, DataFrame
import random
import csv
from datetime import datetime, time, timedelta
import numpy as np

sells_df = pd.read_csv('SellsWithState.csv')
drinker_df = pd.read_csv('DRINKER.csv')

def lookup_drinker_like(like_drinker_id_list, drinker_ssn_list, drinker_id, drinker_name_list):
    index = like_drinker_id_list.index(drinker_id)
    return drinker_name_list[index]
    return drinker_ssn_list[index]


def lookup_item_price(index_of_bar_license, sell_item_code_list, sell_item_list):

    return sell_item_code_list[index_of_bar_license]


def random_item(list, bar_license):
    values = np.array(list)
    searchval = bar_license
    ii = np.where(values == searchval)[0]
    index_of_bar_license = random.choice(ii)
    return index_of_bar_license


drinker_state = drinker_df.State.tolist()
item_name = sells_df.Item.tolist()
drinker_ssn = drinker_df.SSN.tolist()


file = open('transaction.csv', 'w')
line_count = 0

for i in range(len(bill_transaction_id_list)):
    t = random.randint(1, 6)

    for j in range(t):
        like_id = bill_transaction_id_list[i]
        bar_license = bill_license_list[i]
        bar_name = bill_name_list[i]
        ind = random_item(sell_license_list,bar_license)
        item = lookup_item_price(ind, sell_item_code_list, sell_price_list)
        s = ','
        seq = (str(bar_name), str(bar_license), str(transaction_id), str(item))
        temp = s.join(seq)
        file.write(temp + '\n')
        print(line_count)
        line_count += 1
file.close()

