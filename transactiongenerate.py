import csv
import pandas as pd
import random
import numpy as np


def lookup_trans_bar(bill_transaction_id_list, bill_license_list, transaction_id):
    index = bill_transaction_id_list.index(transaction_id)
    return bill_license_list[index]


def lookup_item_price(index_of_bar_license, sell_item_code_list, sell_price_list):

    return sell_item_code_list[index_of_bar_license]


def random_item(list, bar_license):
    values = np.array(list)
    searchval = bar_license
    ii = np.where(values == searchval)[0]
    index_of_bar_license = random.choice(ii)
    return index_of_bar_license


sells = pd.read_csv("Sell.csv")
bill = pd.read_csv("BILL.csv")

sell_name_list = sells.Name.tolist()
sell_license_list = sells.bar_lisence.tolist()
sell_item_code_list = sells.item_code.tolist()
sell_price_list = sells.price.tolist()

bill_license_list = bill.License.tolist()
bill_transaction_id_list = bill.transaction_id.tolist()


file = open('transaction.csv', 'w')
line_count = 0


for i in range(len(bill_transaction_id_list)):
    t = random.randint(1, 8)

    for j in range(t):
        transaction_id = bill_transaction_id_list[i]
        bar_license = bill_license_list[i]
        ind = random_item(sell_license_list,bar_license)
        item = lookup_item_price(ind, sell_item_code_list, sell_price_list)
        s = ','
        seq = (str(bar_name), str(bar_license), str(transaction_id), str(item))
        temp = s.join(seq)
        file.write(temp + '\n')
        print(line_count)
        line_count += 1
file.close()