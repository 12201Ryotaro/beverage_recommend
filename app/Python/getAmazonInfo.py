import requests
from bs4 import BeautifulSoup
import pandas as pd
import os, sys

"""
url = "https://www.amazon.co.jp/"
response = requests.get(url)
soup = BeautifulSoup(response.content, 'lxml')
title = soup.title
print(title)
"""

def download_site_imgs(url, path):
    img_urls = []

    # パス（保存先）が存在しなければ新規作成
    if not os.path.exists(path):
        os.makedirs(path)

    # htmlのパース
    soup = BeautifulSoup(requests.get(url).content,'lxml')
 
    # 画像リンクなら(拡張子がjpgなど)リストに追加
    for img_url in soup.find_all("img"):
        # imgタグのsrc要素を抽出
        src = img_url.get("src")
        #src要素に画像の拡張子が含まれていたらリストに追加
        if 'jpg' in src:
            img_urls.append(src)
        elif 'png' in src:
            img_urls.append(src)
        elif 'gif' in src:
            img_urls.append(src)

    # 画像リンク先のデータをダウンロード
    for img_url in img_urls:
        re = requests.get(img_url)
        print('Download:', img_url)
        with open(path + img_url.split('/')[-1], 'wb') as f: # imgフォルダに格納
            f.write(re.content)

def main():
    df = pd.read_csv('/home/ec2-user/environment/RecommendSite/database/seeds/production_data.csv')
    print(df)
    for bottle_name in df['Bottle']:
        print(bottle_name)
        
    return 

if __name__ == '__main__':
    main()