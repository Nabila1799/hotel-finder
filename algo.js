const rawData = [{"id":"ChIJQSy3BiW_tzERdKIhcggEwZU", "name":"Rest And Comfort Boutique Hotel (RAC)"},{"id":"ChIJPzicC3q-tzERh99DHawUfow", "name":"Hotel Kenangan"},{"id":"ChIJ7xL6h4q-tzERMiSZ_OOSXrs", "name":"Felda Residence Kuala Terengganu"},{"id":"ChIJZz0sfE2_tzERHVaPnNmBsek", "name":"Paya Bunga Hotel Terengganu"},{"id":"ChIJdViwRXi-tzERlEL7j-WwUi8", "name":"Puteri Hotel"},{"id":"ChIJg2WjMGC_tzEREcAktpwBTHc", "name":"j suites hotel"},{"id":"ChIJdVkEvEW-tzERu40u0VsIH7M", "name":"COME INN GREENVILLA"},{"id":"ChIJ9ZXtnBS-tzERYUKYN3H7WbY", "name":"Permai Hotel Kuala Terengganu"},{"id":"ChIJ00UyWXm-tzERwNmlDLmyZMk", "name":"ARENA Boutique Hotel Kuala Terengganu"}
{"id":"ChIJ0yMp9Xi-tzER4BCGGndpboY", "name":"DJ Citi Point Hotel"},{"id":"ChIJ81f183S-tzER_cuSizJLSzw", "name":"Ming Paragon Hotel"},{"id":"ChIJ8_oQrni-tzEROKNyl_wrLxg", "name":"Suite18 Boutique Hotel"},{"id":"ChIJt0dK_HS-tzERVVBX8EKcMtM", "name":"Ming Star Hotel"},{"id":"ChIJpdaRBJa_tzERLDWoKUhTaJo", "name":"T Stay @ Icon Residence"},{"id":"ChIJMU8rj3W-tzER4LmyzjZMdlc", "name":"Hotel Tanjong Vista"},{"id":"ChIJaZsHM3i-tzERmTxhncgmFBM", "name":"Transit Inn Kuala Terengganu"},{"id":"ChIJmd75BnW-tzER7I4NGl_n5e0", "name":"Asia Premium Hotel"},{"id":"ChIJD2Q2t9i9tzER35xqczXbsEY", "name":"The Inn Hotel"},{"id":"ChIJP1u_a3O-tzERSxLXcKENymY", "name":"Sumai Hotel Apartment"},{"id":"ChIJYwnEV3O-tzERFIk0Ejv7a-s", "name":"Primula Beach Hotel"}
{"id":"ChIJqSS6sPO-tzERax4yQHnF3Ww", "name":"Hotel Seri Malaysia Terengganu"},{"id":" ChIJVfcvmj6-tzER76FWh3Ik9x8", "name":"TY Hotel"},{"id":"ChIJ9VC5WN-9tzERmrIZCNW6RxQ", "name":"N&L Hotel (Hotel Kuala Terengganu)"},{"id":"ChIJoWF3HHi-tzERjQ_G2C401kw", "name":"Hotel Sentral Kuala Terengganu"},{"id":"ChIJt3uV8ni-tzERI8QIamIMSKY", "name":"Uptown Eco Hotel"},{"id":"ChIJKbCsz3m-tzERlTXNoan2UKE", "name":"Hotel YT Midtown"},{"id":"ChIJd75BvQq_tzERGKwvyxIBJos", "name":"KAMPUNG CINA HOTEL"},{"id":"ChIJ6zuZcTS_tzERMsytk7IbESs", "name":"HOTEl DESA MURNI"},{"id":"ChIJdVkEvEW-tzERu40u0VsIH7M", "name":"COME INN GREENVILLA"},{"id":"ChIJ7UoV3aG_tzERwgCvSQImJVs", "name":"StarSeason Hotel"},{"id":"ChIJh8cl_3a-tzER_fslSgrXdWQ", "name":"Teratai Tenang Hotel & Homestay"},{"id":"ChIJn-GiHHi-tzERMNQqBQZz4mk", "name":"Hotel Grand Continental Kuala Terengganu"},{"id":"ChIJTeE9wnq-tzERUM65eRMHum8", "name":"Ten Inn"}]


class HotelSearch {
  constructor (source, destination, options) {
    this.hotels = {}
    for(let hotel of rawData){
      this.hotels[hotel.name] = {}
      this.hotels[hotel.name]["lat"] = hotel.lat
      this.hotels[hotel.name]["lng"] = hotel.lng
    }
    this.source = source
    this.destination = destination
    this.options = options
    
    // Add Source and Destination Points to the List of hotels
    this.hotels.source = this.source
    this.hotels.destination = this.destination
    this.firsthotel = this.findNearesthotel(source)
  }
  
  
  dijkstra () {
    if(this.nearesthotel > this.options.MAX_DISTANCE / 2 ){
      return this.minDistance = undefined
    }
    let unvisited = Object.keys(this.graph)
    let dis = {}
    let current = 'source'
    let pathParrent = {}
    let maxStep = unvisited.length + 1;
    dis[current] = 0
    while (maxStep--) {
      for (let adj in this.graph[current]) {
        if (dis[adj] === undefined || dis[adj] > dis[current] + this.distance(this.hotels[current], this.hotels[adj])) {
          dis[adj] = dis[current] + this.distance(this.hotels[current], this.hotels[adj])
          pathParrent[adj] = current
        }
      }
      unvisited.splice(unvisited.indexOf(current), 1)
      if (current === 'destination') {
        console.log('reached destination')
        break
      }
      current = null
      for (let candidate of unvisited) {
        if (dis[candidate] !== undefined && (current === null || dis[current] > dis[candidate])) {
          current = candidate
        }
      }
    }
    
    this.calculatePath(pathParrent)
    this.minDistance = dis['destination']
    return this.minDistance
  }
  
}
