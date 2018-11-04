import csv
import pandas as pd
import random
import numpy as np


def lookup_trans_bar(bill_transaction_id_list, bill_license_list, transaction_id, sell_name_list):
    index = bill_transaction_id_list.index(transaction_id)
    return bill_license_list[index]
    return sell_name_list[index]


def lookup_item_price(index_of_bar_license, sell_item_code_list, sell_price_list):

    return sell_item_code_list[index_of_bar_license]


def random_item(list, bar_license):
    values = np.array(list)
    searchval = bar_license
    ii = np.where(values == searchval)[0]
    index_of_bar_license = random.choice(ii)
    return index_of_bar_license


sells = pd.read_csv("Sells.csv")
bill = pd.read_csv("BILL.csv")

sell_license_list = sells.License.tolist()
sell_item_code_list = sells.ItemID.tolist()
sell_price_list = sells.Price.tolist()

bill_license_list = bill.License.tolist()
bill_id_list = bill.BillID.tolist()

file = open('transaction.csv', 'w')
line_count = 0


for i in range(len(bill_id_list)):
    t = random.randint(2, 5)

    for j in range(t):
        bill_id = bill_id_list[i]
        bar_license = bill_license_list[i]
        ind = random_item(sell_license_list,bar_license)
        item = lookup_item_price(ind, sell_item_code_list, sell_price_list)
        s = ','
        seq = (str(bar_license), str(bill_id), str(item))
        temp = s.join(seq)
        file.write(temp + '\n')
        print(line_count)
        line_count += 1
file.close()