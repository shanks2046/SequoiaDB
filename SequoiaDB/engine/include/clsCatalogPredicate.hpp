#ifndef CLSCATALOGPREDICATE_HPP_
#define CLSCATALOGPREDICATE_HPP_

#include "rtnPredicate.hpp"

namespace engine
{
   class clsCatalogPredicateTree;
   class _clsCatalogItem;

   typedef std::map< std::string , rtnStartStopKey * >  MAP_CLSCATAPREDICATEFIELD ;
   typedef std::vector< clsCatalogPredicateTree * >     VEC_CLSCATAPREDICATESET ;

   /*
      _CLS_CATA_LOGIC_TYPE define
   */
   typedef enum _CLS_CATA_LOGIC_TYPE
   {
      CLS_CATA_LOGIC_INVALID        = 0,
      CLS_CATA_LOGIC_AND            = 1,
      CLS_CATA_LOGIC_OR,
   }CLS_CATA_LOGIC_TYPE ;

   /*
      clsCatalogPredicateTree define
   */
   class clsCatalogPredicateTree : public SDBObject
   {
   public:
      clsCatalogPredicateTree( bson::BSONObj shardingKey ) ;
      ~clsCatalogPredicateTree() ;

      void upgradeToUniverse() ;
      BOOLEAN isUniverse() ;
      CLS_CATA_LOGIC_TYPE getLogicType() ;
      void setLogicType( CLS_CATA_LOGIC_TYPE type ) ;
      void addChild( clsCatalogPredicateTree *pChild ) ;
      INT32 addPredicate( const CHAR *pFieldName, bson::BSONElement beField );
      void adjustByShardingKey() ;
      void clear() ;
      INT32 matches( _clsCatalogItem * pCatalogItem, BOOLEAN & result ) ;

      string toString() const ;

   protected:
      INT32 _matches( bson::BSONObjIterator itrSK,
                      bson::BSONObjIterator itrLB,
                      bson::BSONObjIterator itrUB,
                      BOOLEAN & result,
                      BOOLEAN isCloseInterval ) ;

   private:
      clsCatalogPredicateTree( clsCatalogPredicateTree &right ){}
   private:
      VEC_CLSCATAPREDICATESET       _children ;
      rtnPredicateSet               _predicateSet ;
      CLS_CATA_LOGIC_TYPE           _logicType ;
      bson::BSONObj                 _shardingKey ;

   } ;

}

#endif // CLSCATALOGPREDICATE_HPP_

